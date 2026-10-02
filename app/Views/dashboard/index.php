<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Welcome Header Banner -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 surface-card p-6 border-l-4 border-l-[#C41E24]">
        <div>
            <h1 class="text-xl sm:text-2xl font-bold tracking-tight text-foreground">
                Selamat Datang di <span class="text-[#C41E24]">VLC</span> Newsroom CMS
            </h1>
            <p class="text-xs sm:text-sm text-muted-foreground mt-1">
                Pusat manajemen program vokasi, kurikulum modul, dan pendaftaran peserta Datasatu Vocational Learning Center.
            </p>
        </div>
        <div class="flex items-center gap-2.5">
            <a href="/programs/new" class="inline-flex items-center gap-2 rounded-lg bg-[#C41E24] hover:bg-[#8E1418] px-4 py-2 text-xs font-semibold text-white shadow-xs transition-colors">
                <i data-lucide="plus-circle" class="size-4"></i>
                <span>Tambah Program</span>
            </a>
            <a href="/enrollments" class="inline-flex items-center gap-2 rounded-lg border border-border bg-card hover:bg-muted px-4 py-2 text-xs font-medium text-foreground transition-colors">
                <i data-lucide="clipboard-list" class="size-4"></i>
                <span>Lihat Enrollment</span>
            </a>
        </div>
    </div>

    <!-- Stat Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Total Members -->
        <div class="surface-card p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-muted-foreground uppercase tracking-wider">Total Member</p>
                    <h3 class="text-2xl font-bold text-foreground mt-1.5"><?= number_format($totalMembers) ?></h3>
                    <p class="text-[11px] text-muted-foreground mt-1">Akun terdaftar di database</p>
                </div>
                <div class="size-11 rounded-xl bg-blue-500/10 text-blue-600 dark:text-blue-400 flex items-center justify-center">
                    <i data-lucide="users" class="size-5"></i>
                </div>
            </div>
        </div>

        <!-- Active Programs -->
        <div class="surface-card p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-muted-foreground uppercase tracking-wider">Program Aktif</p>
                    <h3 class="text-2xl font-bold text-foreground mt-1.5"><?= number_format($activePrograms) ?> <span class="text-sm font-normal text-muted-foreground">/ <?= $totalPrograms ?></span></h3>
                    <p class="text-[11px] text-muted-foreground mt-1">Tersedia untuk pendaftaran</p>
                </div>
                <div class="size-11 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center">
                    <i data-lucide="book-open" class="size-5"></i>
                </div>
            </div>
        </div>

        <!-- Total Enrollments -->
        <div class="surface-card p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-muted-foreground uppercase tracking-wider">Total Enrollment</p>
                    <h3 class="text-2xl font-bold text-foreground mt-1.5"><?= number_format($totalEnrollments) ?></h3>
                    <p class="text-[11px] text-muted-foreground mt-1">Peserta terdaftar kelas</p>
                </div>
                <div class="size-11 rounded-xl bg-[#F5841F]/10 text-[#F5841F] flex items-center justify-center">
                    <i data-lucide="clipboard-check" class="size-5"></i>
                </div>
            </div>
        </div>

        <!-- Completed Enrollments -->
        <div class="surface-card p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-medium text-muted-foreground uppercase tracking-wider">Selesai Belajar</p>
                    <h3 class="text-2xl font-bold text-foreground mt-1.5"><?= number_format($completedEnrollments) ?></h3>
                    <p class="text-[11px] text-muted-foreground mt-1">Peserta lulus program</p>
                </div>
                <div class="size-11 rounded-xl bg-purple-500/10 text-purple-600 dark:text-purple-400 flex items-center justify-center">
                    <i data-lucide="award" class="size-5"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Two-Column Section: Programs & Recent Enrollments -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <!-- Programs Overview (7 Cols) -->
        <div class="lg:col-span-7 surface-card p-5">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <i data-lucide="layers" class="size-4.5 text-[#C41E24]"></i>
                    <h3 class="text-sm font-semibold text-foreground">Program Kursus & Vokasi</h3>
                </div>
                <a href="/programs" class="text-xs text-[#C41E24] hover:underline font-medium">Lihat Semua</a>
            </div>

            <div class="space-y-3">
                <?php if (empty($programsList)): ?>
                    <p class="text-xs text-muted-foreground py-6 text-center">Belum ada program kursus.</p>
                <?php else: ?>
                    <?php foreach ($programsList as $p): ?>
                        <div class="flex items-center justify-between p-3.5 rounded-lg border border-border bg-card/50 hover:bg-muted/30 transition-colors">
                            <div class="min-w-0 pr-3">
                                <div class="flex items-center gap-2">
                                    <h4 class="text-xs font-semibold text-foreground truncate"><?= esc($p['name']) ?></h4>
                                    <?php if ($p['status'] === 'active'): ?>
                                        <span class="inline-flex items-center rounded-full bg-emerald-500/10 px-2 py-0.5 text-[10px] font-medium text-emerald-600 dark:text-emerald-400">Aktif</span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center rounded-full bg-slate-500/10 px-2 py-0.5 text-[10px] font-medium text-slate-500"><?= esc($p['status']) ?></span>
                                    <?php endif; ?>
                                </div>
                                <p class="text-[11px] text-muted-foreground mt-0.5 truncate"><?= esc($p['short_desc'] ?? 'Tanpa deskripsi singkat') ?></p>
                                <div class="flex items-center gap-4 mt-2 text-[11px] text-muted-foreground">
                                    <span class="flex items-center gap-1">
                                        <i data-lucide="book" class="size-3"></i>
                                        <span><?= $p['modules_count'] ?> Modul</span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <i data-lucide="users" class="size-3"></i>
                                        <span><?= $p['enrollments_count'] ?> Terdaftar</span>
                                    </span>
                                    <?php if (!empty($p['duration'])): ?>
                                        <span class="flex items-center gap-1">
                                            <i data-lucide="clock" class="size-3"></i>
                                            <span><?= esc($p['duration']) ?></span>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="shrink-0 flex items-center gap-2">
                                <a href="/programs/edit/<?= $p['id'] ?>" class="p-1.5 rounded-md text-muted-foreground hover:text-foreground hover:bg-muted transition-colors" title="Edit Program">
                                    <i data-lucide="pencil" class="size-4"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Recent Enrollments (5 Cols) -->
        <div class="lg:col-span-5 surface-card p-5">
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-2">
                    <i data-lucide="user-check" class="size-4.5 text-[#F5841F]"></i>
                    <h3 class="text-sm font-semibold text-foreground">Pendaftaran Terbaru</h3>
                </div>
                <a href="/enrollments" class="text-xs text-[#C41E24] hover:underline font-medium">Lihat Semua</a>
            </div>

            <div class="space-y-3">
                <?php if (empty($recentEnrollments)): ?>
                    <div class="py-10 text-center">
                        <i data-lucide="clipboard-x" class="size-8 text-muted-foreground mx-auto mb-2 opacity-50"></i>
                        <p class="text-xs text-muted-foreground">Belum ada peserta yang mendaftar kelas.</p>
                        <p class="text-[11px] text-muted-foreground/75 mt-1">Pendaftaran dari Frontend akan muncul di sini secara otomatis.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($recentEnrollments as $e): ?>
                        <div class="p-3 rounded-lg border border-border bg-card/50">
                            <div class="flex items-start justify-between gap-2">
                                <div class="min-w-0">
                                    <p class="text-xs font-semibold text-foreground truncate"><?= esc($e['member_name'] ?? 'Member #' . $e['member_id']) ?></p>
                                    <p class="text-[11px] text-muted-foreground truncate"><?= esc($e['program_name'] ?? 'Program #' . $e['program_id']) ?></p>
                                </div>
                                <span class="shrink-0 inline-flex items-center rounded-full bg-blue-500/10 px-2 py-0.5 text-[10px] font-medium text-blue-600 dark:text-blue-400 capitalize">
                                    <?= esc($e['status']) ?>
                                </span>
                            </div>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-border/50 text-[10px] text-muted-foreground">
                                <span><?= esc(substr($e['enrolled_at'] ?? $e['created_at'], 0, 16)) ?></span>
                                <span>Progress: <?= (int)$e['progress'] ?>%</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->section('scripts') ?>
<script>
    // Additional dashboard scripts if needed
</script>
<?= $this->endSection() ?>
<?= $this->endSection() ?>
