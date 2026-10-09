<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold tracking-tight text-foreground">Data Enrollment Peserta</h1>
            <p class="text-xs text-muted-foreground mt-0.5">Kelola dan pantau status tindak lanjut peserta kelas VLC.</p>
        </div>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="surface-card p-4">
        <form method="GET" action="/enrollments" class="grid grid-cols-1 sm:grid-cols-12 gap-3">
            <!-- Filter Program -->
            <div class="sm:col-span-4">
                <select name="program_id" onchange="this.form.submit()" 
                        class="w-full text-xs rounded-md border border-border bg-background px-3 py-1.5 focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    <option value="">-- Semua Program Pelatihan --</option>
                    <?php foreach ($programs as $pr): ?>
                        <option value="<?= $pr['id'] ?>" <?= ($programId == $pr['id']) ? 'selected' : '' ?>>
                            <?= esc($pr['name']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Filter Status -->
            <div class="sm:col-span-3">
                <select name="status" onchange="this.form.submit()" 
                        class="w-full text-xs rounded-md border border-border bg-background px-3 py-1.5 focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    <option value="">-- Semua Status --</option>
                    <option value="waiting" <?= ($status === 'waiting') ? 'selected' : '' ?>>Waiting (Menunggu Verifikasi)</option>
                    <option value="contacted" <?= ($status === 'contacted') ? 'selected' : '' ?>>Contacted (Sudah Dihubungi)</option>
                    <option value="active" <?= ($status === 'active' || $status === 'in_progress') ? 'selected' : '' ?>>Active (Terverifikasi)</option>
                    <option value="finished" <?= ($status === 'finished') ? 'selected' : '' ?>>Finished (Selesai)</option>
                    <option value="rejected" <?= ($status === 'rejected') ? 'selected' : '' ?>>Rejected (Ditolak / Gagal)</option>
                </select>
            </div>

            <!-- Keyword Search -->
            <div class="sm:col-span-5 relative">
                <input type="text" name="q" value="<?= esc($keyword ?? '') ?>" placeholder="Cari nama peserta, program..."
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
                        <th class="px-4 py-3 font-semibold">No Telp</th>
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
                                <!-- Peserta: Nama saja -->
                                <td class="px-4 py-3.5 font-semibold text-foreground">
                                    <?= esc($e['member_name'] ?? 'Peserta #' . $e['member_id']) ?>
                                </td>

                                <!-- Program -->
                                <td class="px-4 py-3.5 font-medium text-foreground">
                                    <?= esc($e['program_name'] ?? 'Program #' . $e['program_id']) ?>
                                </td>

                                <!-- Tanggal Daftar -->
                                <td class="px-4 py-3.5 text-muted-foreground">
                                    <?= esc(substr($e['enrolled_at'] ?? $e['created_at'], 0, 16)) ?>
                                </td>

                                <!-- Status Badge -->
                                <td class="px-4 py-3.5">
                                    <?php
                                        $badgeStyle = match($e['status']) {
                                            'finished'              => 'bg-emerald-500/10 text-emerald-600 border border-emerald-500/20',
                                            'active', 'in_progress' => 'bg-emerald-500/10 text-emerald-700 dark:text-emerald-400 border border-emerald-500/30',
                                            'contacted'             => 'bg-sky-500/10 text-sky-600 border border-sky-500/20',
                                            'rejected'              => 'bg-red-500/10 text-red-600 border border-red-500/20',
                                            default                 => 'bg-amber-500/10 text-amber-600 border border-amber-500/20'
                                        };
                                        $statusLabel = match($e['status']) {
                                            'finished'              => 'Finished',
                                            'active', 'in_progress' => 'Active (Verified)',
                                            'contacted'             => 'Contacted',
                                            'rejected'              => 'Rejected',
                                            default                 => 'Waiting (Menunggu)'
                                        };
                                    ?>
                                    <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-[10px] font-semibold <?= $badgeStyle ?>">
                                        <?= esc($statusLabel) ?>
                                    </span>
                                </td>

                                <!-- No Telp Column -->
                                <td class="px-4 py-3.5 font-mono text-[11px] text-foreground">
                                    <?php if (!empty($e['member_phone'])): ?>
                                        <div class="flex items-center gap-1.5">
                                            <span><?= esc($e['member_phone']) ?></span>
                                            <?php 
                                                $cleanPhone = preg_replace('/[^0-9]/', '', $e['member_phone']);
                                                if (str_starts_with($cleanPhone, '0')) {
                                                    $cleanPhone = '62' . substr($cleanPhone, 1);
                                                }
                                            ?>
                                            <a href="https://wa.me/<?= $cleanPhone ?>" target="_blank" rel="noopener noreferrer" 
                                               class="text-emerald-600 hover:text-emerald-700 p-0.5 rounded" title="Hubungi via WhatsApp">
                                                <i data-lucide="message-circle" class="size-3.5"></i>
                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <span class="text-muted-foreground">-</span>
                                    <?php endif; ?>
                                </td>

                                <!-- Update Status Column -->
                                <td class="px-4 py-3.5 text-right">
                                    <form action="/enrollments/update-status/<?= $e['id'] ?>" method="POST" 
                                          onsubmit="return handleStatusSubmit(event, this, '<?= esc(addslashes($e['member_name'] ?? 'Peserta')) ?>', '<?= esc(addslashes($e['program_name'] ?? 'Program')) ?>')"
                                          class="inline-flex items-center gap-1.5 justify-end">
                                        <?= csrf_field() ?>
                                        
                                        <select name="status" 
                                                class="rounded border border-border bg-background px-2 py-1 text-[11px] font-medium text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                                            <option value="waiting" <?= ($e['status'] === 'waiting' || $e['status'] === 'enrolled') ? 'selected' : '' ?>>Waiting</option>
                                            <option value="contacted" <?= $e['status'] === 'contacted' ? 'selected' : '' ?>>Contacted</option>
                                            <option value="active" <?= ($e['status'] === 'active' || $e['status'] === 'in_progress') ? 'selected' : '' ?>>Active (Verified)</option>
                                            <option value="finished" <?= $e['status'] === 'finished' ? 'selected' : '' ?>>Finished</option>
                                            <option value="rejected" <?= $e['status'] === 'rejected' ? 'selected' : '' ?>>Rejected (Ditolak)</option>
                                        </select>

                                        <button type="submit" 
                                                class="inline-flex items-center justify-center size-6 rounded bg-[#C41E24] hover:bg-[#A8151A] text-white shadow-xs transition-colors cursor-pointer"
                                                title="Simpan Status">
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

<!-- Modal Konfirmasi Penolakan (Rejected) -->
<div id="rejectConfirmModal" class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-card w-full max-w-md rounded-2xl border border-border shadow-2xl p-6 relative">
        <div class="flex items-start gap-4 mb-4">
            <div class="size-11 rounded-full bg-red-500/10 text-red-600 flex items-center justify-center shrink-0 border border-red-500/20">
                <i data-lucide="alert-triangle" class="size-6"></i>
            </div>
            <div>
                <h3 class="text-base font-bold text-foreground">Konfirmasi Penolakan Pendaftaran</h3>
                <p class="text-xs text-muted-foreground mt-0.5">Peringatan tindakan penolakan pendaftaran kelas.</p>
            </div>
        </div>

        <div class="space-y-3 text-xs text-foreground bg-muted/40 rounded-xl p-4 border border-border/60 mb-5">
            <p>Anda akan mengubah status pendaftaran peserta:</p>
            <div class="font-semibold text-foreground border-l-2 border-red-500 pl-2.5 space-y-1">
                <div>Peserta: <span id="modalRejectMember" class="font-bold text-red-600 dark:text-red-400"></span></div>
                <div>Program: <span id="modalRejectProgram" class="font-bold"></span></div>
            </div>
            <div class="p-3 rounded-lg bg-red-50 dark:bg-red-950/40 border border-red-200 dark:border-red-900/50 text-red-700 dark:text-red-300 font-medium leading-relaxed">
                <strong>Perhatian:</strong> Setelah status diubah menjadi <strong>Rejected</strong>, peserta <u>tidak akan bisa lagi mendaftar (assign) kembali</u> pada program pelatihan ini, dan email pemberitahuan penolakan otomatis dikirimkan ke email peserta.
            </div>
        </div>

        <div class="flex items-center justify-end gap-2.5 pt-2">
            <button type="button" onclick="closeRejectModal()" 
                    class="px-4 py-2 rounded-lg border border-border text-xs font-semibold text-foreground hover:bg-muted transition-colors cursor-pointer">
                Batal
            </button>
            <button type="button" id="confirmRejectBtn" onclick="executeRejectSubmit()" 
                    class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white text-xs font-bold shadow-xs transition-colors cursor-pointer">
                Ya, Tolak Pendaftaran
            </button>
        </div>
    </div>
</div>

<script>
    let pendingFormToSubmit = null;

    function handleStatusSubmit(e, form, memberName, programName) {
        const statusSelect = form.querySelector('select[name="status"]');
        if (statusSelect && statusSelect.value === 'rejected') {
            e.preventDefault();
            pendingFormToSubmit = form;
            
            document.getElementById('modalRejectMember').textContent = memberName;
            document.getElementById('modalRejectProgram').textContent = programName;
            
            const modal = document.getElementById('rejectConfirmModal');
            if (modal) {
                modal.classList.remove('hidden');
            }
            if (window.lucide) {
                lucide.createIcons();
            }
            return false;
        }
        return true;
    }

    function closeRejectModal() {
        const modal = document.getElementById('rejectConfirmModal');
        if (modal) {
            modal.classList.add('hidden');
        }
        pendingFormToSubmit = null;
    }

    function executeRejectSubmit() {
        if (pendingFormToSubmit) {
            const form = pendingFormToSubmit;
            pendingFormToSubmit = null;
            form.submit();
        }
    }
</script>

<?= $this->endSection() ?>
