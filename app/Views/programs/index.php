<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header with Action -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold tracking-tight text-foreground">Program Kursus & Vokasi</h1>
            <p class="text-xs text-muted-foreground mt-0.5">Kelola seluruh program belajar dan kurikulum modul.</p>
        </div>
        <a href="/programs/new" class="inline-flex items-center gap-2 rounded-lg bg-[#C41E24] hover:bg-[#8E1418] px-4 py-2 text-xs font-semibold text-white shadow-xs transition-colors self-start sm:self-auto">
            <i data-lucide="plus" class="size-4"></i>
            <span>Tambah Program Baru</span>
        </a>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="surface-card p-4">
        <form method="GET" action="/programs" class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
            <div class="flex items-center gap-2 flex-wrap">
                <a href="/programs" class="rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= empty($status) ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Semua
                </a>
                <a href="/programs?status=active" class="rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= $status === 'active' ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Aktif
                </a>
                <a href="/programs?status=draft" class="rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= $status === 'draft' ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Draft
                </a>
                <a href="/programs?status=inactive" class="rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= $status === 'inactive' ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Non-Aktif
                </a>
            </div>

            <div class="relative w-full sm:w-64">
                <input type="text" name="q" value="<?= esc($keyword ?? '') ?>" placeholder="Cari nama program..."
                       class="w-full pl-8 pr-3 py-1.5 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                <i data-lucide="search" class="size-3.5 absolute left-2.5 top-1/2 -translate-y-1/2 text-muted-foreground"></i>
            </div>
        </form>
    </div>

    <!-- Table of Programs -->
    <div class="surface-card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-muted/50 border-b border-border text-muted-foreground uppercase text-[10px] tracking-wider">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Nama Program</th>
                        <th class="px-4 py-3 font-semibold">Slug</th>
                        <th class="px-4 py-3 font-semibold text-center">Peserta</th>
                        <th class="px-4 py-3 font-semibold">Durasi</th>
                        <th class="px-4 py-3 font-semibold">Status</th>
                        <th class="px-4 py-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <?php if (empty($programs)): ?>
                        <tr>
                            <td colspan="6" class="px-4 py-8 text-center text-muted-foreground">
                                Tidak ada program yang sesuai kriteria pencarian.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($programs as $p): ?>
                            <tr class="hover:bg-muted/20 transition-colors">
                                <td class="px-4 py-3.5">
                                    <div class="font-semibold text-foreground"><?= esc($p['name']) ?></div>
                                    <div class="text-[11px] text-muted-foreground truncate max-w-xs mt-0.5"><?= esc($p['short_desc']) ?></div>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground font-mono text-[11px]">
                                    <?= esc($p['slug']) ?>
                                </td>
                                <td class="px-4 py-3.5 text-center font-medium">
                                    <span class="inline-flex items-center gap-1 rounded-md bg-blue-500/10 text-blue-600 dark:text-blue-400 px-2 py-0.5">
                                        <i data-lucide="users" class="size-3"></i>
                                        <span><?= $p['enrollments_count'] ?></span>
                                    </span>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground">
                                    <?= esc($p['duration'] ?? '-') ?>
                                </td>
                                <td class="px-4 py-3.5">
                                    <?php if ($p['status'] === 'active'): ?>
                                        <span class="inline-flex items-center rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-[10px] font-medium text-emerald-600 dark:text-emerald-400">
                                            Aktif
                                        </span>
                                    <?php elseif ($p['status'] === 'draft'): ?>
                                        <span class="inline-flex items-center rounded-full bg-amber-500/10 px-2.5 py-0.5 text-[10px] font-medium text-amber-600 dark:text-amber-400">
                                            Draft
                                        </span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center rounded-full bg-slate-500/10 px-2.5 py-0.5 text-[10px] font-medium text-slate-500">
                                            Non-Aktif
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3.5 text-right">
                                    <div class="inline-flex items-center gap-1">
                                        <a href="/programs/edit/<?= $p['id'] ?>" class="p-1.5 rounded-md text-muted-foreground hover:text-foreground hover:bg-muted transition-colors" title="Edit Program">
                                            <i data-lucide="edit" class="size-4"></i>
                                        </a>
                                        <a href="/programs/delete/<?= $p['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus program ini beserta modulnya?');" class="p-1.5 rounded-md text-muted-foreground hover:text-red-600 hover:bg-red-50 dark:hover:bg-red-950/30 transition-colors" title="Hapus">
                                            <i data-lucide="trash-2" class="size-4"></i>
                                        </a>
                                    </div>
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
