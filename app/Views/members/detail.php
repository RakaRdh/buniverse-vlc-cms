<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Breadcrumb & Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <div class="flex items-center gap-2 text-xs text-muted-foreground mb-1">
                <a href="/members" class="hover:text-foreground transition-colors">Data Member</a>
                <i data-lucide="chevron-right" class="size-3"></i>
                <span class="text-foreground font-medium">Detail Member</span>
            </div>
            <h1 class="text-xl font-bold tracking-tight text-foreground flex items-center gap-2.5">
                <span><?= esc($member['fullname'] ?? 'Peserta #' . $member['memberID']) ?></span>
                <?php if ($member['status'] === 'active'): ?>
                    <span class="inline-flex items-center rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-[10px] font-semibold text-emerald-600 border border-emerald-500/20 capitalize">
                        Aktif
                    </span>
                <?php elseif ($member['status'] === 'banned'): ?>
                    <span class="inline-flex items-center rounded-full bg-red-500/10 px-2.5 py-0.5 text-[10px] font-semibold text-red-600 border border-red-500/20 capitalize">
                        Banned
                    </span>
                <?php else: ?>
                    <span class="inline-flex items-center rounded-full bg-amber-500/10 px-2.5 py-0.5 text-[10px] font-semibold text-amber-600 border border-amber-500/20 capitalize">
                        <?= esc($member['status'] ?? 'Inactive') ?>
                    </span>
                <?php endif; ?>
            </h1>
        </div>

        <a href="/members" class="inline-flex items-center gap-1.5 rounded-lg border border-border px-3 py-1.5 text-xs font-medium text-foreground hover:bg-muted transition-colors self-start sm:self-auto">
            <i data-lucide="arrow-left" class="size-3.5"></i>
            <span>Kembali ke Daftar Member</span>
        </a>
    </div>

    <!-- Main Grid: Profil & Info Kontak -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Card 1: Data Akun & Kontak -->
        <div class="surface-card p-6 space-y-5 lg:col-span-1">
            <div class="flex items-center gap-3 pb-4 border-b border-border">
                <div class="size-12 rounded-full bg-[#C41E24]/10 text-[#C41E24] flex items-center justify-center font-bold text-lg border border-[#C41E24]/20">
                    <?= esc(substr($member['fullname'] ?? 'P', 0, 1)) ?>
                </div>
                <div class="min-w-0">
                    <p class="font-bold text-sm text-foreground truncate"><?= esc($member['fullname'] ?? '-') ?></p>
                    <p class="text-xs text-muted-foreground truncate"><?= esc($member['email']) ?></p>
                </div>
            </div>

            <div class="space-y-3.5 text-xs">
                <div>
                    <span class="block text-[10px] font-bold text-muted-foreground uppercase tracking-wider">Member ID</span>
                    <span class="font-mono font-medium text-foreground">#<?= esc($member['memberID']) ?></span>
                </div>

                <div>
                    <span class="block text-[10px] font-bold text-muted-foreground uppercase tracking-wider">Nomor WhatsApp / Telepon</span>
                    <?php if (!empty($member['phone'])): ?>
                        <div class="flex items-center justify-between gap-2 mt-0.5">
                            <span class="font-mono font-medium text-foreground"><?= esc($member['phone']) ?></span>
                            <?php 
                                $cleanPhone = preg_replace('/[^0-9]/', '', $member['phone']);
                                if (str_starts_with($cleanPhone, '0')) {
                                    $cleanPhone = '62' . substr($cleanPhone, 1);
                                }
                            ?>
                            <a href="https://wa.me/<?= $cleanPhone ?>" target="_blank" rel="noopener noreferrer" 
                               class="inline-flex items-center gap-1 text-[11px] font-semibold text-emerald-600 hover:text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200 transition-colors">
                                <i data-lucide="message-circle" class="size-3"></i>
                                <span>Hubungi WA</span>
                            </a>
                        </div>
                    <?php else: ?>
                        <span class="text-muted-foreground italic">Belum diisi</span>
                    <?php endif; ?>
                </div>

                <div>
                    <span class="block text-[10px] font-bold text-muted-foreground uppercase tracking-wider">Alamat / Domisili</span>
                    <p class="font-medium text-foreground mt-0.5">
                        <?= !empty($member['address']) ? nl2br(esc($member['address'])) : '<span class="text-muted-foreground italic">Belum diisi</span>' ?>
                    </p>
                </div>

                <div>
                    <span class="block text-[10px] font-bold text-muted-foreground uppercase tracking-wider">Tanggal Registrasi</span>
                    <span class="font-medium text-foreground"><?= esc($member['signupdate'] ?? '-') ?></span>
                </div>

                <div>
                    <span class="block text-[10px] font-bold text-muted-foreground uppercase tracking-wider">Terakhir Login</span>
                    <span class="font-medium text-foreground"><?= esc($member['lastlogin'] ?? 'Belum pernah login') ?></span>
                </div>
            </div>
        </div>

        <!-- Card 2: Riwayat Program yang Di-enroll -->
        <div class="surface-card p-6 space-y-4 lg:col-span-2">
            <div class="flex items-center justify-between pb-3 border-b border-border">
                <div>
                    <h2 class="text-sm font-bold text-foreground">Program Pelatihan yang Diikuti</h2>
                    <p class="text-[11px] text-muted-foreground">Daftar kelas yang pernah didaftarkan oleh peserta ini.</p>
                </div>
                <span class="text-xs font-semibold px-2.5 py-0.5 rounded-full bg-muted text-foreground">
                    Total: <?= count($enrollments) ?> Kelas
                </span>
            </div>

            <?php if (empty($enrollments)): ?>
                <div class="py-12 text-center text-muted-foreground">
                    <i data-lucide="book-x" class="size-8 mx-auto mb-2 opacity-50"></i>
                    <p class="text-xs">Peserta ini belum mendaftar ke program pelatihan apapun.</p>
                </div>
            <?php else: ?>
                <div class="space-y-3">
                    <?php foreach ($enrollments as $en): ?>
                        <div class="rounded-lg border border-border p-4 hover:border-slate-300 dark:hover:border-slate-700 transition-colors flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                            <div class="space-y-1">
                                <div class="flex items-center gap-2">
                                    <h3 class="text-xs font-bold text-foreground"><?= esc($en['program_name']) ?></h3>
                                    <?php if (!empty($en['batch_info'])): ?>
                                        <span class="rounded bg-muted px-1.5 py-0.5 text-[10px] text-muted-foreground font-medium">
                                            <?= esc($en['batch_info']) ?>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                <p class="text-[11px] text-muted-foreground">
                                    Terdaftar pada: <span class="font-medium text-foreground"><?= esc(substr($en['enrolled_at'] ?? $en['created_at'], 0, 16)) ?></span>
                                    <?php if (!empty($en['completed_at'])): ?>
                                        &bull; Selesai: <span class="font-medium text-emerald-600"><?= esc(substr($en['completed_at'], 0, 10)) ?></span>
                                    <?php endif; ?>
                                </p>
                            </div>

                            <div class="flex items-center gap-3 self-end sm:self-auto">
                                <?php
                                    $badgeStyle = match($en['status']) {
                                        'finished'    => 'bg-emerald-500/10 text-emerald-600 border border-emerald-500/20',
                                        'in_progress' => 'bg-indigo-500/10 text-indigo-600 border border-indigo-500/20',
                                        'contacted'   => 'bg-sky-500/10 text-sky-600 border border-sky-500/20',
                                        default       => 'bg-amber-500/10 text-amber-600 border border-amber-500/20'
                                    };
                                    $statusLabel = match($en['status']) {
                                        'finished'    => 'Finished',
                                        'in_progress' => 'In Progress',
                                        'contacted'   => 'Contacted',
                                        default       => 'Enrolled'
                                    };
                                ?>
                                <span class="inline-flex items-center rounded-full px-2.5 py-1 text-[10px] font-semibold <?= $badgeStyle ?>">
                                    <?= esc($statusLabel) ?>
                                </span>

                                <a href="/enrollments?q=<?= urlencode($member['fullname'] ?? '') ?>" 
                                   class="text-[11px] font-semibold text-[#C41E24] hover:underline" title="Kelola di menu Enrollments">
                                    Kelola &rarr;
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!-- Riwayat Log Aktivitas Khusus Member -->
            <?php if (!empty($logs)): ?>
                <div class="mt-6 pt-4 border-t border-border">
                    <h3 class="text-xs font-bold text-foreground mb-3 flex items-center gap-2">
                        <i data-lucide="history" class="size-3.5 text-muted-foreground"></i>
                        <span>Riwayat Log Aktivitas Administrator Terkait</span>
                    </h3>
                    <div class="space-y-2">
                        <?php foreach ($logs as $l): ?>
                            <div class="rounded-md bg-muted/40 p-2.5 text-[11px] flex items-start justify-between gap-3">
                                <div>
                                    <span class="font-semibold text-foreground"><?= esc($l['admin_name']) ?>:</span>
                                    <span class="text-muted-foreground"><?= esc($l['description']) ?></span>
                                </div>
                                <span class="text-[10px] text-muted-foreground shrink-0 font-mono"><?= esc(substr($l['created_at'], 0, 16)) ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
