<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <div class="flex items-center gap-2">
                <h1 class="text-xl font-bold tracking-tight text-foreground">Audit Activity Log</h1>
                <span class="inline-flex items-center gap-1 rounded-md bg-amber-500/10 px-2 py-0.5 text-[10px] font-bold text-amber-600 border border-amber-500/20 uppercase tracking-wider">
                    <i data-lucide="shield-check" class="size-3"></i>
                    <span>Superadmin Only</span>
                </span>
            </div>
            <p class="text-xs text-muted-foreground mt-0.5">Catatan jejak audit seluruh aktivitas CRUD dan mutasi data oleh administrator sistem VLC.</p>
        </div>
    </div>

    <!-- Filter Toolbar -->
    <div class="surface-card p-4">
        <form method="GET" action="/activity-log" class="grid grid-cols-1 sm:grid-cols-12 gap-3">
            <!-- Filter Modul -->
            <div class="sm:col-span-3">
                <select name="module" onchange="this.form.submit()" 
                        class="w-full text-xs rounded-md border border-border bg-background px-3 py-1.5 focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    <option value="">-- Semua Modul --</option>
                    <option value="enrollments" <?= ($module === 'enrollments') ? 'selected' : '' ?>>Enrollments</option>
                    <option value="programs" <?= ($module === 'programs') ? 'selected' : '' ?>>Programs</option>
                    <option value="members" <?= ($module === 'members') ? 'selected' : '' ?>>Members</option>
                    <option value="auth" <?= ($module === 'auth') ? 'selected' : '' ?>>Auth / Session</option>
                    <option value="profile" <?= ($module === 'profile') ? 'selected' : '' ?>>Admin Profile</option>
                </select>
            </div>

            <!-- Filter Aksi -->
            <div class="sm:col-span-3">
                <select name="action" onchange="this.form.submit()" 
                        class="w-full text-xs rounded-md border border-border bg-background px-3 py-1.5 focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    <option value="">-- Semua Aksi (CRUD) --</option>
                    <option value="STATUS_CHANGE" <?= ($action === 'STATUS_CHANGE') ? 'selected' : '' ?>>STATUS_CHANGE</option>
                    <option value="INSERT" <?= ($action === 'INSERT') ? 'selected' : '' ?>>INSERT</option>
                    <option value="UPDATE" <?= ($action === 'UPDATE') ? 'selected' : '' ?>>UPDATE</option>
                    <option value="DELETE" <?= ($action === 'DELETE') ? 'selected' : '' ?>>DELETE</option>
                    <option value="LOGIN" <?= ($action === 'LOGIN') ? 'selected' : '' ?>>LOGIN</option>
                    <option value="PASSWORD_CHANGE" <?= ($action === 'PASSWORD_CHANGE') ? 'selected' : '' ?>>PASSWORD_CHANGE</option>
                </select>
            </div>

            <!-- Keyword Search -->
            <div class="sm:col-span-6 relative">
                <input type="text" name="q" value="<?= esc($keyword ?? '') ?>" placeholder="Cari keterangan, nama admin, atau member..."
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
                        <th class="px-4 py-3 font-semibold">Waktu</th>
                        <th class="px-4 py-3 font-semibold">Administrator</th>
                        <th class="px-4 py-3 font-semibold">Aksi</th>
                        <th class="px-4 py-3 font-semibold">Modul</th>
                        <th class="px-4 py-3 font-semibold">Member Terkait</th>
                        <th class="px-4 py-3 font-semibold">Keterangan Detail</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <?php if (empty($logs)): ?>
                        <tr>
                            <td colspan="6" class="px-4 py-12 text-center text-muted-foreground">
                                <i data-lucide="history" class="size-8 mx-auto mb-2 opacity-50"></i>
                                <p class="text-xs">Belum ada catatan aktivitas yang sesuai filter.</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($logs as $l): ?>
                            <tr class="hover:bg-muted/20 transition-colors">
                                <td class="px-4 py-3.5 font-mono text-[11px] text-muted-foreground whitespace-nowrap">
                                    <?= esc($l['created_at']) ?>
                                </td>
                                <td class="px-4 py-3.5 font-semibold text-foreground whitespace-nowrap">
                                    <div class="flex items-center gap-1.5">
                                        <i data-lucide="user-check" class="size-3.5 text-[#C41E24]"></i>
                                        <span><?= esc($l['admin_name']) ?></span>
                                    </div>
                                </td>
                                <td class="px-4 py-3.5">
                                    <?php
                                        $actionBadge = match(strtoupper($l['action'])) {
                                            'DELETE'          => 'bg-red-500/10 text-red-600 border border-red-500/20',
                                            'STATUS_CHANGE'   => 'bg-amber-500/10 text-amber-600 border border-amber-500/20',
                                            'INSERT'          => 'bg-emerald-500/10 text-emerald-600 border border-emerald-500/20',
                                            'PASSWORD_CHANGE' => 'bg-purple-500/10 text-purple-600 border border-purple-500/20',
                                            'LOGIN', 'LOGOUT' => 'bg-slate-500/10 text-slate-600 dark:text-slate-400 border border-slate-500/20',
                                            default           => 'bg-blue-500/10 text-blue-600 border border-blue-500/20'
                                        };
                                    ?>
                                    <span class="inline-flex items-center rounded-full px-2 py-0.5 text-[10px] font-mono font-semibold <?= $actionBadge ?>">
                                        <?= esc($l['action']) ?>
                                    </span>
                                </td>
                                <td class="px-4 py-3.5 capitalize font-medium text-foreground">
                                    <?= esc($l['module']) ?>
                                </td>
                                <td class="px-4 py-3.5 text-foreground">
                                    <?php if (!empty($l['target_member_name'])): ?>
                                        <span class="font-medium"><?= esc($l['target_member_name']) ?></span>
                                        <?php if (!empty($l['target_member_id'])): ?>
                                            <span class="text-muted-foreground font-mono text-[10px]">(#<?= esc($l['target_member_id']) ?>)</span>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <span class="text-muted-foreground">-</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3.5 text-foreground max-w-md">
                                    <?= esc($l['description']) ?>
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
