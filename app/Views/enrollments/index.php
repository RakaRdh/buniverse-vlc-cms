<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold tracking-tight text-foreground">Data Pendaftaran Peserta (Enrollment)</h1>
            <p class="text-xs text-muted-foreground mt-0.5">Pantau status pendaftaran dan progres belajar peserta program vokasi.</p>
        </div>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="surface-card p-4">
        <form method="GET" action="/enrollments" class="grid grid-cols-1 sm:grid-cols-12 gap-3 items-center">
            <!-- Filter Program -->
            <div class="sm:col-span-4">
                <select name="program_id" onchange="this.form.submit()" class="w-full px-3 py-1.5 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    <option value="">Semua Program</option>
                    <?php foreach ($programs as $pr): ?>
                        <option value="<?= $pr['id'] ?>" <?= $programId == $pr['id'] ? 'selected' : '' ?>>
                            <?= esc($pr['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Filter Status -->
            <div class="sm:col-span-3">
                <select name="status" onchange="this.form.submit()" class="w-full px-3 py-1.5 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    <option value="">Semua Status</option>
                    <option value="enrolled" <?= $status === 'enrolled' ? 'selected' : '' ?>>Enrolled</option>
                    <option value="in_progress" <?= $status === 'in_progress' ? 'selected' : '' ?>>In Progress</option>
                    <option value="completed" <?= $status === 'completed' ? 'selected' : '' ?>>Completed</option>
                    <option value="dropped" <?= $status === 'dropped' ? 'selected' : '' ?>>Dropped</option>
                </select>
            </div>

            <!-- Keyword Search -->
            <div class="sm:col-span-5 relative">
                <input type="text" name="q" value="<?= esc($keyword ?? '') ?>" placeholder="Cari nama peserta, email..."
                       class="w-full pl-8 pr-3 py-1.5 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                <i data-lucide="search" class="size-3.5 absolute left-2.5 top-1/2 -translate-y-1/2 text-muted-foreground"></i>
            </div>
        </form>
    </div>

    <!-- Table -->
    <div class="surface-card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-muted/50 border-b border-border text-muted-foreground uppercase text-[10px] tracking-wider">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Peserta</th>
                        <th class="px-4 py-3 font-semibold">Program</th>
                        <th class="px-4 py-3 font-semibold">Tanggal Daftar</th>
                        <th class="px-4 py-3 font-semibold">Status</th>
                        <th class="px-4 py-3 font-semibold text-center">Progress</th>
                        <th class="px-4 py-3 font-semibold text-right">Update Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <?php if (empty($enrollments)): ?>
                        <tr>
                            <td colspan="6" class="px-4 py-12 text-center text-muted-foreground">
                                <i data-lucide="inbox" class="size-8 mx-auto mb-2 opacity-50"></i>
                                <p class="text-xs">Belum ada data pendaftaran yang sesuai filter.</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($enrollments as $e): ?>
                            <tr class="hover:bg-muted/20 transition-colors">
                                <td class="px-4 py-3.5">
                                    <div class="font-semibold text-foreground"><?= esc($e['member_name'] ?? 'Peserta #' . $e['member_id']) ?></div>
                                    <div class="text-[11px] text-muted-foreground"><?= esc($e['member_email']) ?></div>
                                    <?php if (!empty($e['member_phone'])): ?>
                                        <div class="text-[10px] text-muted-foreground"><?= esc($e['member_phone']) ?></div>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3.5 font-medium text-foreground">
                                    <?= esc($e['program_name'] ?? 'Program #' . $e['program_id']) ?>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground">
                                    <?= esc(substr($e['enrolled_at'] ?? $e['created_at'], 0, 16)) ?>
                                </td>
                                <td class="px-4 py-3.5">
                                    <?php
                                        $badgeColor = match($e['status']) {
                                            'completed' => 'bg-emerald-500/10 text-emerald-600 dark:text-emerald-400',
                                            'in_progress' => 'bg-blue-500/10 text-blue-600 dark:text-blue-400',
                                            'dropped' => 'bg-red-500/10 text-red-600 dark:text-red-400',
                                            default => 'bg-[#F5841F]/10 text-[#F5841F]'
                                        };
                                    ?>
                                    <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-[10px] font-medium capitalize <?= $badgeColor ?>">
                                        <?= esc($e['status']) ?>
                                    </span>
                                </td>
                                <td class="px-4 py-3.5 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <div class="w-16 bg-muted rounded-full h-1.5 overflow-hidden">
                                            <div class="bg-[#C41E24] h-1.5 rounded-full" style="width: <?= (int)$e['progress'] ?>%"></div>
                                        </div>
                                        <span class="font-medium text-[11px] text-muted-foreground"><?= (int)$e['progress'] ?>%</span>
                                    </div>
                                </td>
                                <td class="px-4 py-3.5 text-right">
                                    <form action="/enrollments/update-status/<?= $e['id'] ?>" method="POST" class="inline-flex items-center gap-1.5 justify-end">
                                        <?= csrf_field() ?>
                                        <select name="status" class="px-2 py-1 text-[11px] rounded border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                                            <option value="enrolled" <?= $e['status'] === 'enrolled' ? 'selected' : '' ?>>Enrolled</option>
                                            <option value="in_progress" <?= $e['status'] === 'in_progress' ? 'selected' : '' ?>>In Progress</option>
                                            <option value="completed" <?= $e['status'] === 'completed' ? 'selected' : '' ?>>Completed</option>
                                            <option value="dropped" <?= $e['status'] === 'dropped' ? 'selected' : '' ?>>Dropped</option>
                                        </select>
                                        <button type="submit" class="p-1 rounded bg-[#C41E24] text-white hover:bg-[#8E1418] transition-colors" title="Simpan Status">
                                            <i data-lucide="check" class="size-3.5"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
