<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold tracking-tight text-foreground">Data Member & Peserta</h1>
            <p class="text-xs text-muted-foreground mt-0.5">Daftar pengguna terdaftar yang bersumber dari tabel member.</p>
        </div>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="surface-card p-4">
        <form method="GET" action="/members" class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div class="flex items-center gap-2 flex-wrap">
                <a href="/members" class="rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= empty($status) ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Semua
                </a>
                <a href="/members?status=active" class="rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= $status === 'active' ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Aktif
                </a>
                <a href="/members?status=inactive" class="rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= $status === 'inactive' ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Inactive
                </a>
                <a href="/members?status=banned" class="rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= $status === 'banned' ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Banned
                </a>
            </div>

            <div class="relative w-full sm:w-64">
                <input type="text" name="q" value="<?= esc($keyword ?? '') ?>" placeholder="Cari nama, email, no telp..."
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
                        <th class="px-4 py-3 font-semibold">ID</th>
                        <th class="px-4 py-3 font-semibold">Nama Lengkap</th>
                        <th class="px-4 py-3 font-semibold">Email</th>
                        <th class="px-4 py-3 font-semibold">No Telepon</th>
                        <th class="px-4 py-3 font-semibold text-center">Kelas Diikuti</th>
                        <th class="px-4 py-3 font-semibold">Status</th>
                        <th class="px-4 py-3 font-semibold">Terdaftar</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <?php if (empty($members)): ?>
                        <tr>
                            <td colspan="7" class="px-4 py-12 text-center text-muted-foreground">
                                <i data-lucide="users" class="size-8 mx-auto mb-2 opacity-50"></i>
                                <p class="text-xs">Belum ada akun member yang sesuai filter.</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($members as $m): ?>
                            <tr class="hover:bg-muted/20 transition-colors">
                                <td class="px-4 py-3.5 font-mono text-[11px] text-muted-foreground">
                                    #<?= esc($m['memberID']) ?>
                                </td>
                                <td class="px-4 py-3.5 font-semibold text-foreground">
                                    <?= esc($m['fullname'] ?? '-') ?>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground">
                                    <?= esc($m['email']) ?>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground">
                                    <?= esc($m['phone'] ?? '-') ?>
                                </td>
                                <td class="px-4 py-3.5 text-center font-medium">
                                    <span class="inline-flex items-center gap-1 rounded-md bg-muted px-2 py-0.5">
                                        <i data-lucide="book-open" class="size-3 text-muted-foreground"></i>
                                        <span><?= $m['enrolled_count'] ?></span>
                                    </span>
                                </td>
                                <td class="px-4 py-3.5">
                                    <?php if ($m['status'] === 'active'): ?>
                                        <span class="inline-flex items-center rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-[10px] font-medium text-emerald-600 dark:text-emerald-400 capitalize">
                                            <?= esc($m['status']) ?>
                                        </span>
                                    <?php elseif ($m['status'] === 'banned'): ?>
                                        <span class="inline-flex items-center rounded-full bg-red-500/10 px-2.5 py-0.5 text-[10px] font-medium text-red-600 capitalize">
                                            Banned
                                        </span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center rounded-full bg-amber-500/10 px-2.5 py-0.5 text-[10px] font-medium text-amber-600 capitalize">
                                            <?= esc($m['status'] ?? 'inactive') ?>
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground">
                                    <?= esc(substr($m['signupdate'] ?? '-', 0, 10)) ?>
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
