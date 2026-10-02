<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6 w-full">
    <!-- Welcome Header Banner -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 surface-card p-6 border-l-4 border-l-[#C41E24]">
        <div>
            <h1 class="text-xl sm:text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
                Selamat Datang di <span class="text-[#C41E24]">VLC</span> Newsroom CMS
            </h1>
            <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-1">
                Pusat manajemen program vokasi, kurikulum modul, dan pendaftaran peserta Datasatu Vocational Learning Center.
            </p>
        </div>
        <div class="flex items-center gap-2.5">
            <a href="/programs/new" class="inline-flex items-center gap-2 rounded-lg bg-[#C41E24] hover:bg-[#A8151A] px-4 py-2 text-xs font-semibold text-white shadow-xs transition-colors">
                <i data-lucide="plus-circle" class="size-4"></i>
                <span>Tambah Program</span>
            </a>
            <a href="/enrollments" class="inline-flex items-center gap-2 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 hover:bg-slate-50 px-4 py-2 text-xs font-medium text-slate-700 dark:text-slate-200 transition-colors">
                <i data-lucide="clipboard-list" class="size-4"></i>
                <span>Lihat Enrollment</span>
            </a>
        </div>
    </div>

    <!-- Stat Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 w-full">
        <!-- Total Members -->
        <div class="surface-card p-5">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Member</p>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1.5"><?= number_format($totalMembers) ?></h3>
                    <p class="text-[11px] text-slate-400 mt-1">Akun terdaftar di database</p>
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
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Program Aktif</p>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1.5"><?= number_format($activePrograms) ?> <span class="text-sm font-normal text-slate-400">/ <?= $totalPrograms ?></span></h3>
                    <p class="text-[11px] text-slate-400 mt-1">Tersedia untuk pendaftaran</p>
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
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Enrollment</p>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1.5"><?= number_format($totalEnrollments) ?></h3>
                    <p class="text-[11px] text-slate-400 mt-1">Peserta terdaftar kelas</p>
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
                    <p class="text-xs font-semibold text-slate-500 dark:text-slate-400 uppercase tracking-wider">Selesai Belajar</p>
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1.5"><?= number_format($completedEnrollments) ?></h3>
                    <p class="text-[11px] text-slate-400 mt-1">Peserta lulus program</p>
                </div>
                <div class="size-11 rounded-xl bg-purple-500/10 text-purple-600 dark:text-purple-400 flex items-center justify-center">
                    <i data-lucide="award" class="size-5"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Two-Column Section: Programs & Recent Enrollments -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 w-full items-start">
        <!-- Programs Overview (7 Cols) -->
        <div class="lg:col-span-7 w-full surface-card p-5">
            <div class="flex items-center justify-between mb-4 pb-2 border-b border-slate-100 dark:border-slate-800">
                <div class="flex items-center gap-2">
                    <i data-lucide="layers" class="size-4.5 text-[#C41E24]"></i>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">Program Kursus & Vokasi</h3>
                </div>
                <a href="/programs" class="text-xs text-[#C41E24] hover:underline font-semibold">Lihat Semua</a>
            </div>

            <div class="space-y-3 w-full">
                <?php if (empty($programsList)): ?>
                    <p class="text-xs text-slate-400 py-6 text-center">Belum ada program kursus.</p>
                <?php else: ?>
                    <?php foreach ($programsList as $p): ?>
                        <div class="flex items-center justify-between p-3.5 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 hover:border-slate-300 transition-colors w-full">
                            <div class="min-w-0 pr-3 flex-1">
                                <div class="flex items-center gap-2">
                                    <h4 class="text-xs font-bold text-slate-900 dark:text-white truncate"><?= esc($p['name']) ?></h4>
                                    <?php if ($p['status'] === 'active'): ?>
                                        <span class="inline-flex items-center rounded-full bg-emerald-500/10 px-2 py-0.5 text-[10px] font-semibold text-emerald-600 dark:text-emerald-400">Aktif</span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center rounded-full bg-slate-500/10 px-2 py-0.5 text-[10px] font-semibold text-slate-500"><?= esc($p['status']) ?></span>
                                    <?php endif; ?>
                                </div>
                                <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5 truncate"><?= esc($p['short_desc'] ?? 'Tanpa deskripsi singkat') ?></p>
                                <div class="flex items-center gap-4 mt-2 text-[11px] text-slate-500 dark:text-slate-400">
                                    <span class="flex items-center gap-1">
                                        <i data-lucide="book" class="size-3 text-[#C41E24]"></i>
                                        <span><?= $p['modules_count'] ?> Modul</span>
                                    </span>
                                    <span class="flex items-center gap-1">
                                        <i data-lucide="users" class="size-3 text-blue-500"></i>
                                        <span><?= $p['enrollments_count'] ?> Terdaftar</span>
                                    </span>
                                    <?php if (!empty($p['duration'])): ?>
                                        <span class="flex items-center gap-1">
                                            <i data-lucide="clock" class="size-3 text-slate-400"></i>
                                            <span><?= esc($p['duration']) ?></span>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="shrink-0 flex items-center gap-2">
                                <a href="/programs/edit/<?= $p['id'] ?>" class="p-1.5 rounded-md text-slate-400 hover:text-slate-700 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors" title="Edit Program">
                                    <i data-lucide="pencil" class="size-4"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Recent Enrollments (5 Cols) -->
        <div class="lg:col-span-5 w-full surface-card p-5">
            <div class="flex items-center justify-between mb-4 pb-2 border-b border-slate-100 dark:border-slate-800">
                <div class="flex items-center gap-2">
                    <i data-lucide="user-check" class="size-4.5 text-[#F5841F]"></i>
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white">Pendaftaran Terbaru</h3>
                </div>
                <a href="/enrollments" class="text-xs text-[#C41E24] hover:underline font-semibold">Lihat Semua</a>
            </div>

            <div class="space-y-3 w-full">
                <?php if (empty($recentEnrollments)): ?>
                    <div class="py-10 text-center">
                        <i data-lucide="clipboard-x" class="size-8 text-slate-300 dark:text-slate-600 mx-auto mb-2"></i>
                        <p class="text-xs text-slate-500">Belum ada peserta yang mendaftar kelas.</p>
                        <p class="text-[11px] text-slate-400 mt-1">Pendaftaran dari Frontend akan muncul di sini secara otomatis.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($recentEnrollments as $e): ?>
                        <div class="p-3.5 rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800">
                            <div class="flex items-start justify-between gap-2">
                                <div class="min-w-0 flex-1">
                                    <p class="text-xs font-bold text-slate-900 dark:text-white truncate"><?= esc($e['member_name'] ?? 'Member #' . $e['member_id']) ?></p>
                                    <p class="text-[11px] text-slate-500 dark:text-slate-400 truncate"><?= esc($e['program_name'] ?? 'Program #' . $e['program_id']) ?></p>
                                </div>
                                <span class="shrink-0 inline-flex items-center rounded-full bg-blue-500/10 px-2 py-0.5 text-[10px] font-semibold text-blue-600 dark:text-blue-400 capitalize">
                                    <?= esc($e['status']) ?>
                                </span>
                            </div>
                            <div class="flex items-center justify-between mt-2 pt-2 border-t border-slate-100 dark:border-slate-700 text-[10px] text-slate-400">
                                <span><?= esc(substr($e['enrolled_at'] ?? $e['created_at'], 0, 16)) ?></span>
                                <span class="font-semibold text-slate-600 dark:text-slate-300">Progress: <?= (int)$e['progress'] ?>%</span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
