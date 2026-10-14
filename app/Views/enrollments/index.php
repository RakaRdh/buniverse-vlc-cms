<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold tracking-tight text-foreground">Data Enrollment Peserta</h1>
            <p class="text-xs text-muted-foreground mt-0.5">Kelola dan pantau status tindak lanjut peserta kelas VLC.</p>
        </div>
        <div class="flex items-center gap-2">
            <button type="button" onclick="openEnrollModal()" 
                    class="inline-flex items-center gap-2 rounded-lg bg-[#C41E24] hover:bg-[#A8151A] px-4 py-2 text-xs font-semibold text-white shadow-xs transition-colors cursor-pointer">
                <i data-lucide="user-plus" class="size-4"></i>
                <span>Daftarkan / Assign Peserta</span>
            </button>
        </div>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="surface-card p-4">
        <form id="enrollmentsFilterForm" method="GET" action="/enrollments" class="grid grid-cols-1 sm:grid-cols-12 gap-3" onsubmit="return false;">
            <!-- Filter Program -->
            <div class="sm:col-span-4">
                <select name="program_id" id="filterProgram"
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
                <select name="status" id="filterStatus"
                        class="w-full text-xs rounded-md border border-border bg-background px-3 py-1.5 focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    <option value="">-- Semua Status --</option>
                    <option value="waiting" <?= ($status === 'waiting') ? 'selected' : '' ?>>Waiting (Menunggu Verifikasi)</option>
                    <option value="contacted" <?= ($status === 'contacted') ? 'selected' : '' ?>>Contacted (Sudah Dihubungi)</option>
                    <option value="active" <?= ($status === 'active' || $status === 'in_progress') ? 'selected' : '' ?>>Active (Terverifikasi)</option>
                    <option value="finished" <?= ($status === 'finished') ? 'selected' : '' ?>>Finished (Selesai)</option>
                    <option value="rejected" <?= ($status === 'rejected') ? 'selected' : '' ?>>Rejected (Ditolak)</option>
                    <option value="banned" <?= ($status === 'banned') ? 'selected' : '' ?>>Banned (Diblokir)</option>
                </select>
            </div>

            <!-- Keyword Search -->
            <div class="sm:col-span-5 relative">
                <input type="text" name="q" id="filterKeyword" value="<?= esc($keyword ?? '') ?>" placeholder="Cari nama peserta, program..."
                       class="w-full pl-8 pr-3 py-1.5 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                <i data-lucide="search" class="size-3.5 absolute left-2.5 top-1/2 -translate-y-1/2 text-muted-foreground"></i>
            </div>
        </form>
    </div>

    <!-- Table -->
    <div id="enrollmentsTableWrapper" class="surface-card overflow-hidden transition-opacity duration-150">
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
                                <!-- Peserta: Nama & Email -->
                                <td class="px-4 py-3.5">
                                    <div class="font-semibold text-foreground text-xs">
                                        <?= esc($e['member_name'] ?? 'Peserta #' . $e['member_id']) ?>
                                    </div>
                                    <?php if (!empty($e['member_email'])): ?>
                                        <div class="text-[11px] text-muted-foreground font-normal mt-0.5">
                                            <?= esc($e['member_email']) ?>
                                        </div>
                                    <?php endif; ?>
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
                                            'banned'                => 'bg-red-600 text-white font-bold border border-red-700',
                                            'rejected'              => 'bg-rose-500/10 text-rose-600 border border-rose-500/20',
                                            default                 => 'bg-amber-500/10 text-amber-600 border border-amber-500/20'
                                        };
                                        $statusLabel = match($e['status']) {
                                            'finished'              => 'Finished',
                                            'active', 'in_progress' => 'Active (Verified)',
                                            'contacted'             => 'Contacted',
                                            'banned'                => 'Banned (Diblokir)',
                                            'rejected'              => 'Rejected',
                                            default                 => 'Waiting (Menunggu)'
                                        };
                                    ?>
                                    <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-[10px] font-semibold <?= $badgeStyle ?>">
                                        <?= esc($statusLabel) ?>
                                    </span>
                                </td>

                                <!-- No Telp Column (Format Standar + WA link) -->
                                <td class="px-4 py-3.5 font-mono text-[11px] text-foreground whitespace-nowrap">
                                    <?php if (!empty($e['member_phone'])): ?>
                                        <div class="flex items-center gap-1.5">
                                            <span><?= esc(\App\Helpers\PhoneHelper::formatDisplay($e['member_phone'])) ?></span>
                                            <?php $waUrl = \App\Helpers\PhoneHelper::waUrl($e['member_phone']); ?>
                                            <?php if (!empty($waUrl)): ?>
                                                <a href="<?= esc($waUrl) ?>" target="_blank" rel="noopener noreferrer" 
                                                   class="text-emerald-600 hover:text-emerald-700 p-0.5 rounded transition-transform hover:scale-110" title="Hubungi via WhatsApp">
                                                    <i data-lucide="message-circle" class="size-3.5"></i>
                                                </a>
                                            <?php endif; ?>
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
                                            <option value="rejected" <?= $e['status'] === 'rejected' ? 'selected' : '' ?>>Rejected</option>
                                            <option value="banned" <?= $e['status'] === 'banned' ? 'selected' : '' ?>>Banned (Blokir)</option>
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

<!-- Modal Konfirmasi Banned / Rejected -->
<div id="rejectConfirmModal" class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-card w-full max-w-md rounded-2xl border border-border shadow-2xl p-6 relative">
        <div class="flex items-start gap-4 mb-4">
            <div id="modalIconBox" class="size-11 rounded-full bg-red-500/10 text-red-600 flex items-center justify-center shrink-0 border border-red-500/20">
                <i data-lucide="alert-triangle" class="size-6"></i>
            </div>
            <div>
                <h3 id="modalConfirmTitle" class="text-base font-bold text-foreground">Konfirmasi Pemblokiran / Penolakan</h3>
                <p id="modalConfirmSubtitle" class="text-xs text-muted-foreground mt-0.5">Peringatan tindakan perubahan status pendaftaran.</p>
            </div>
        </div>

        <div class="space-y-3 text-xs text-foreground bg-muted/40 rounded-xl p-4 border border-border/60 mb-5">
            <p>Anda akan mengubah status pendaftaran peserta:</p>
            <div class="font-semibold text-foreground border-l-2 border-red-500 pl-2.5 space-y-1">
                <div>Peserta: <span id="modalRejectMember" class="font-bold text-red-600 dark:text-red-400"></span></div>
                <div>Program: <span id="modalRejectProgram" class="font-bold"></span></div>
            </div>
            <div id="modalConfirmAlertText" class="p-3 rounded-lg bg-red-50 dark:bg-red-950/40 border border-red-200 dark:border-red-900/50 text-red-700 dark:text-red-300 font-medium leading-relaxed">
                <!-- Injected dynamically -->
            </div>
        </div>

        <div class="flex items-center justify-end gap-2.5 pt-2">
            <button type="button" onclick="closeRejectModal()" 
                    class="px-4 py-2 rounded-lg border border-border text-xs font-semibold text-foreground hover:bg-muted transition-colors cursor-pointer">
                Batal
            </button>
            <button type="button" id="confirmRejectBtn" onclick="executeRejectSubmit()" 
                    class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white text-xs font-bold shadow-xs transition-colors cursor-pointer">
                Ya, Ubah Status
            </button>
        </div>
    </div>
</div>

<!-- Modal 2-Step Registrasi & Manual Enroll dari Admin -->
<div id="adminEnrollModal" class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-card w-full max-w-xl rounded-2xl border border-border shadow-2xl p-6 relative max-h-[90vh] overflow-y-auto">
        <div class="flex items-center justify-between pb-4 border-b border-border">
            <div>
                <h3 class="text-base font-bold text-foreground">Daftarkan & Assign Peserta ke Program</h3>
                <p class="text-xs text-muted-foreground mt-0.5">Entri langsung peserta via CMS (Auto Verified).</p>
            </div>
            <button type="button" onclick="closeEnrollModal()" class="text-muted-foreground hover:text-foreground p-1 rounded-lg">
                <i data-lucide="x" class="size-5"></i>
            </button>
        </div>

        <!-- Wizard Step Indicators -->
        <div class="flex items-center justify-between my-5 px-2">
            <div class="flex items-center gap-2">
                <span id="step1Indicator" class="size-7 rounded-full bg-[#C41E24] text-white flex items-center justify-center text-xs font-bold shadow-xs">1</span>
                <span class="text-xs font-bold text-foreground">Registrasi / Pilih Peserta</span>
            </div>
            <div class="flex-1 h-0.5 bg-border mx-3"></div>
            <div class="flex items-center gap-2">
                <span id="step2Indicator" class="size-7 rounded-full bg-muted text-muted-foreground flex items-center justify-center text-xs font-bold">2</span>
                <span class="text-xs font-medium text-muted-foreground">Pilih Program & Status</span>
            </div>
        </div>

        <form id="adminEnrollForm" action="/enrollments/manual-enroll" method="POST" class="space-y-4">
            <?= csrf_field() ?>
            <input type="hidden" name="mode" id="enrollMode" value="existing">
            <input type="hidden" name="member_id" id="selectedMemberId" value="">

            <!-- STEP 1: Registration / Find Member -->
            <div id="enrollStep1" class="space-y-4">
                <!-- Registration Option Toggle -->
                <div class="grid grid-cols-2 gap-3 p-1 rounded-xl bg-muted/60 border border-border">
                    <button type="button" id="tabExisting" onclick="switchRegMode('existing')" 
                            class="py-2 px-3 text-xs font-bold rounded-lg bg-background text-[#C41E24] shadow-xs transition-all">
                        Opsi 1: Akun Datasatu Ada
                    </button>
                    <button type="button" id="tabNew" onclick="switchRegMode('new')" 
                            class="py-2 px-3 text-xs font-medium rounded-lg text-muted-foreground hover:text-foreground transition-all">
                        Opsi 2: Registrasi Akun Baru
                    </button>
                </div>

                <!-- Pane: Existing Datasatu Member -->
                <div id="paneExisting" class="space-y-3.5">
                    <div>
                        <label class="block text-xs font-semibold text-foreground mb-1.5">Email Akun Datasatu <span class="text-red-500">*</span></label>
                        <div class="flex gap-2">
                            <input type="email" id="searchMemberEmail" placeholder="Masukkan email akun Datasatu..."
                                   class="flex-1 px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                            <button type="button" onclick="lookupMember()" 
                                    class="px-4 py-2 rounded-lg bg-[#C41E24] hover:bg-[#A8151A] text-white text-xs font-semibold shrink-0 shadow-xs cursor-pointer">
                                Cek Member
                            </button>
                        </div>
                        <p id="lookupMsg" class="text-[11px] mt-1.5 hidden"></p>
                    </div>

                    <!-- Member Found Info Card -->
                    <div id="memberFoundCard" class="hidden p-3.5 rounded-xl border border-emerald-500/30 bg-emerald-500/5 space-y-2">
                        <div class="flex items-center justify-between">
                            <span class="text-xs font-bold text-emerald-700 dark:text-emerald-400" id="foundMemberName">-</span>
                            <span class="text-[10px] px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 font-bold">Terverifikasi</span>
                        </div>
                        <p class="text-[11px] text-muted-foreground" id="foundMemberEmail">-</p>

                        <div class="pt-2 border-t border-border">
                            <label class="block text-[11px] font-semibold text-foreground mb-1">Nomor WhatsApp / Telepon:</label>
                            <div id="existing_phone_container" data-phone-input 
                                 data-name="phone" data-value="" data-required="false" 
                                 data-theme="cms" data-placeholder="812-1278-7989"></div>
                            <p class="text-[10px] text-muted-foreground mt-0.5">Otomatis memperbarui atau menambahkan nomor di tabel profil.</p>
                        </div>
                    </div>
                </div>

                <!-- Pane: Full New Registration -->
                <div id="paneNew" class="hidden space-y-3">
                    <div class="p-2.5 rounded-lg bg-blue-50 dark:bg-blue-950/30 border border-blue-200 dark:border-blue-900 text-blue-700 dark:text-blue-300 text-[11px]">
                        <i data-lucide="info" class="size-3.5 inline mr-1"></i>
                        Akun akan langsung berstatus <strong>Active</strong> (tanpa perlu verifikasi email manual oleh peserta).
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-foreground mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" name="fullname" id="newFullname" placeholder="Nama lengkap peserta"
                               class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-foreground mb-1">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email" id="newEmail" placeholder="email@contoh.com"
                               class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-foreground mb-1">Nomor WhatsApp / Telepon</label>
                        <div id="new_phone_container" data-phone-input 
                             data-name="new_phone" data-value="" data-required="false" 
                             data-theme="cms" data-placeholder="812-1278-7989"></div>
                    </div>

                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-semibold text-foreground mb-1">Password</label>
                            <div class="relative">
                                <input type="password" name="password" id="newPassword" value="Datasatu123!" placeholder="Datasatu123!"
                                       class="w-full pl-3 pr-9 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                                <button type="button" onclick="togglePassVisibility('newPassword', this)" 
                                        class="absolute right-2.5 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground cursor-pointer p-0.5" 
                                        title="Tampilkan / Sembunyikan Password">
                                    <i data-lucide="eye" class="size-4"></i>
                                </button>
                            </div>
                            <p class="text-[10px] text-muted-foreground mt-0.5">Default: Datasatu123!</p>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-foreground mb-1">Konfirmasi Password</label>
                            <div class="relative">
                                <input type="password" id="newPasswordConfirm" value="Datasatu123!" placeholder="Datasatu123!"
                                       class="w-full pl-3 pr-9 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                                <button type="button" onclick="togglePassVisibility('newPasswordConfirm', this)" 
                                        class="absolute right-2.5 top-1/2 -translate-y-1/2 text-muted-foreground hover:text-foreground cursor-pointer p-0.5" 
                                        title="Tampilkan / Sembunyikan Password">
                                    <i data-lucide="eye" class="size-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t border-border flex justify-end">
                    <button type="button" onclick="goToStep(2)" 
                            class="inline-flex items-center gap-1.5 px-5 py-2 rounded-lg bg-[#C41E24] hover:bg-[#A8151A] text-white text-xs font-bold shadow-xs cursor-pointer">
                        <span>Lanjut ke Pilih Program</span>
                        <i data-lucide="arrow-right" class="size-3.5"></i>
                    </button>
                </div>
            </div>

            <!-- STEP 2: Choose Program & Status -->
            <div id="enrollStep2" class="hidden space-y-4">
                <div class="p-3 rounded-xl bg-muted/40 border border-border text-xs">
                    <span class="text-muted-foreground">Peserta Terpilih: </span>
                    <strong id="summaryMemberText" class="text-foreground">-</strong>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-foreground mb-1.5">Pilih Program Pelatihan <span class="text-red-500">*</span></label>
                    <select name="program_id" id="selectedProgramId" required
                            class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                        <option value="">-- Pilih Program --</option>
                        <?php foreach ($programs as $p): ?>
                            <option value="<?= $p['id'] ?>">
                                <?= esc($p['name']) ?> (Status: <?= esc($p['status']) ?>)
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-foreground mb-1.5">Status Pendaftaran Awal</label>
                    <select name="enroll_status" id="selectedEnrollStatus"
                            class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                        <option value="active" selected>Active (Terverifikasi & Langsung Terdaftar)</option>
                        <option value="waiting">Waiting (Menunggu)</option>
                        <option value="contacted">Contacted (Sudah Dihubungi)</option>
                    </select>
                </div>

                <div class="pt-4 border-t border-border flex items-center justify-between">
                    <button type="button" onclick="goToStep(1)" 
                            class="inline-flex items-center gap-1.5 px-4 py-2 rounded-lg border border-border text-foreground text-xs font-semibold hover:bg-muted cursor-pointer">
                        <i data-lucide="arrow-left" class="size-3.5"></i>
                        <span>Kembali</span>
                    </button>
                    <button type="submit" 
                            class="inline-flex items-center gap-2 px-5 py-2 rounded-lg bg-[#C41E24] hover:bg-[#A8151A] text-white text-xs font-bold shadow-xs cursor-pointer">
                        <i data-lucide="check-circle" class="size-4"></i>
                        <span>Simpan & Daftarkan Sekarang</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    let pendingFormToSubmit = null;

    function handleStatusSubmit(e, form, memberName, programName) {
        const statusSelect = form.querySelector('select[name="status"]');
        if (statusSelect && (statusSelect.value === 'rejected' || statusSelect.value === 'banned')) {
            e.preventDefault();
            pendingFormToSubmit = form;
            
            document.getElementById('modalRejectMember').textContent = memberName;
            document.getElementById('modalRejectProgram').textContent = programName;
            
            const isBanned = statusSelect.value === 'banned';
            const titleEl = document.getElementById('modalConfirmTitle');
            const alertTextEl = document.getElementById('modalConfirmAlertText');
            const btnEl = document.getElementById('confirmRejectBtn');
            const iconBox = document.getElementById('modalIconBox');

            if (isBanned) {
                titleEl.textContent = 'Konfirmasi Pemblokiran (Banned)';
                alertTextEl.innerHTML = '<strong>Perhatian:</strong> Setelah status diubah menjadi <strong>Banned</strong>, peserta <u>tidak akan bisa lagi mendaftar (assign)</u> pada program pelatihan ini di masa mendatang.';
                btnEl.textContent = 'Ya, Blokir Peserta';
                btnEl.className = 'px-4 py-2 rounded-lg bg-red-700 hover:bg-red-800 text-white text-xs font-bold shadow-xs transition-colors cursor-pointer';
            } else {
                titleEl.textContent = 'Konfirmasi Penolakan (Rejected)';
                alertTextEl.innerHTML = 'Status akan diubah menjadi <strong>Rejected</strong>. Email pemberitahuan penolakan otomatis dikirimkan ke email peserta.';
                btnEl.textContent = 'Ya, Tolak Pendaftaran';
                btnEl.className = 'px-4 py-2 rounded-lg bg-rose-600 hover:bg-rose-700 text-white text-xs font-bold shadow-xs transition-colors cursor-pointer';
            }

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

    // Modal Enroll Management
    function openEnrollModal() {
        const modal = document.getElementById('adminEnrollModal');
        if (modal) {
            modal.classList.remove('hidden');
            goToStep(1);
        }
        if (window.lucide) {
            lucide.createIcons();
        }
    }

    function closeEnrollModal() {
        const modal = document.getElementById('adminEnrollModal');
        if (modal) {
            modal.classList.add('hidden');
        }
    }

    function switchRegMode(mode) {
        document.getElementById('enrollMode').value = mode;
        const tabExisting = document.getElementById('tabExisting');
        const tabNew = document.getElementById('tabNew');
        const paneExisting = document.getElementById('paneExisting');
        const paneNew = document.getElementById('paneNew');

        if (mode === 'existing') {
            tabExisting.className = 'py-2 px-3 text-xs font-bold rounded-lg bg-background text-[#C41E24] shadow-xs transition-all';
            tabNew.className = 'py-2 px-3 text-xs font-medium rounded-lg text-muted-foreground hover:text-foreground transition-all';
            paneExisting.classList.remove('hidden');
            paneNew.classList.add('hidden');
        } else {
            tabNew.className = 'py-2 px-3 text-xs font-bold rounded-lg bg-background text-[#C41E24] shadow-xs transition-all';
            tabExisting.className = 'py-2 px-3 text-xs font-medium rounded-lg text-muted-foreground hover:text-foreground transition-all';
            paneNew.classList.remove('hidden');
            paneExisting.classList.add('hidden');
        }
        if (window.lucide) {
            lucide.createIcons();
        }
    }

    function lookupMember() {
        const email = document.getElementById('searchMemberEmail').value.trim();
        const msgEl = document.getElementById('lookupMsg');
        const card = document.getElementById('memberFoundCard');

        if (!email) {
            msgEl.className = 'text-[11px] mt-1.5 text-red-500 block';
            msgEl.textContent = 'Silakan ketikkan email terlebih dahulu.';
            return;
        }

        msgEl.className = 'text-[11px] mt-1.5 text-muted-foreground block';
        msgEl.textContent = 'Mencari akun...';

        const formData = new FormData();
        formData.append('email', email);
        formData.append('<?= csrf_token() ?>', '<?= csrf_hash() ?>');

        fetch('/enrollments/check-member', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(res => res.json())
        .then(res => {
            if (res.success && res.data) {
                msgEl.className = 'text-[11px] mt-1.5 text-emerald-600 font-semibold block';
                msgEl.textContent = '✓ Akun ditemukan!';
                
                document.getElementById('selectedMemberId').value = res.data.member_id;
                document.getElementById('foundMemberName').textContent = res.data.fullname;
                document.getElementById('foundMemberEmail').textContent = res.data.email;
                
                const existingPhoneCont = document.getElementById('existing_phone_container');
                if (existingPhoneCont && existingPhoneCont._vlcPhoneInstance) {
                    existingPhoneCont._vlcPhoneInstance.setValue(res.data.phone || '');
                }
                card.classList.remove('hidden');
            } else {
                msgEl.className = 'text-[11px] mt-1.5 text-red-500 font-medium block';
                msgEl.textContent = res.message || 'Akun tidak ditemukan di database Datasatu.';
                card.classList.add('hidden');
                document.getElementById('selectedMemberId').value = '';
            }
        })
        .catch(err => {
            msgEl.className = 'text-[11px] mt-1.5 text-red-500 block';
            msgEl.textContent = 'Gagal memeriksa member: ' + err.message;
        });
    }

    function goToStep(step) {
        const step1 = document.getElementById('enrollStep1');
        const step2 = document.getElementById('enrollStep2');
        const s1Ind = document.getElementById('step1Indicator');
        const s2Ind = document.getElementById('step2Indicator');
        const mode = document.getElementById('enrollMode').value;

        if (step === 2) {
            if (mode === 'existing') {
                const memberId = document.getElementById('selectedMemberId').value;
                if (!memberId) {
                    alert('Silakan cek dan temukan akun member Datasatu terlebih dahulu.');
                    return;
                }
                const name = document.getElementById('foundMemberName').textContent;
                const email = document.getElementById('foundMemberEmail').textContent;
                document.getElementById('summaryMemberText').textContent = `${name} (${email})`;
            } else {
                const name = document.getElementById('newFullname').value.trim();
                const email = document.getElementById('newEmail').value.trim();
                const p1 = document.getElementById('newPassword').value;
                const p2 = document.getElementById('newPasswordConfirm').value;

                if (!name || !email) {
                    alert('Nama lengkap dan email wajib diisi.');
                    return;
                }
                if (p1 !== p2) {
                    alert('Password dan konfirmasi password tidak cocok.');
                    return;
                }

                // Copy phone from paneNew to phone field for submit
                const newPhoneCont = document.getElementById('new_phone_container');
                const existPhoneCont = document.getElementById('existing_phone_container');
                if (newPhoneCont && newPhoneCont._vlcPhoneInstance && existPhoneCont && existPhoneCont._vlcPhoneInstance) {
                    const newPhoneVal = newPhoneCont._vlcPhoneInstance.getValue();
                    existPhoneCont._vlcPhoneInstance.setValue(newPhoneVal);
                }

                document.getElementById('summaryMemberText').textContent = `${name} (${email}) — [Akun Baru]`;
            }

            step1.classList.add('hidden');
            step2.classList.remove('hidden');
            s2Ind.className = 'size-7 rounded-full bg-[#C41E24] text-white flex items-center justify-center text-xs font-bold shadow-xs';
        } else {
            step2.classList.add('hidden');
            step1.classList.remove('hidden');
            s2Ind.className = 'size-7 rounded-full bg-muted text-muted-foreground flex items-center justify-center text-xs font-bold';
        }
        if (window.lucide) {
            lucide.createIcons();
        }
    }

    function togglePassVisibility(inputId, btn) {
        const input = document.getElementById(inputId);
        if (!input) return;
        const isPassword = input.type === 'password';
        input.type = isPassword ? 'text' : 'password';
        btn.innerHTML = isPassword ? '<i data-lucide="eye-off" class="size-4"></i>' : '<i data-lucide="eye" class="size-4"></i>';
        if (window.lucide) {
            lucide.createIcons();
        }
    }

    // Live AJAX Filter for Enrollments Table (No Full Reload)
    (function initEnrollmentAjaxFilter() {
        const programSelect = document.getElementById('filterProgram');
        const statusSelect = document.getElementById('filterStatus');
        const keywordInput = document.getElementById('filterKeyword');
        const tableWrapper = document.getElementById('enrollmentsTableWrapper');

        if (!programSelect || !statusSelect || !keywordInput || !tableWrapper) return;

        let debounceTimer = null;
        let activeAbortCtrl = null;

        function fetchFilteredData() {
            const prog = programSelect.value;
            const stat = statusSelect.value;
            const kw = keywordInput.value.trim();

            const params = new URLSearchParams();
            if (prog) params.set('program_id', prog);
            if (stat) params.set('status', stat);
            if (kw) params.set('q', kw);

            // Update browser URL without reloading
            const newUrl = '/enrollments' + (params.toString() ? '?' + params.toString() : '');
            window.history.replaceState(null, '', newUrl);

            if (activeAbortCtrl) {
                activeAbortCtrl.abort();
            }
            activeAbortCtrl = new AbortController();

            tableWrapper.style.opacity = '0.5';

            fetch(newUrl, {
                signal: activeAbortCtrl.signal,
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
            .then(res => res.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newTable = doc.getElementById('enrollmentsTableWrapper');
                if (newTable) {
                    tableWrapper.innerHTML = newTable.innerHTML;
                }
                tableWrapper.style.opacity = '1';
                if (window.lucide) {
                    lucide.createIcons();
                }
                if (window.initGlobalTableSorting) {
                    window.initGlobalTableSorting();
                }
            })
            .catch(err => {
                if (err.name !== 'AbortError') {
                    console.error('Filter fetch error:', err);
                    tableWrapper.style.opacity = '1';
                }
            });
        }

        programSelect.addEventListener('change', fetchFilteredData);
        statusSelect.addEventListener('change', fetchFilteredData);

        keywordInput.addEventListener('input', function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(fetchFilteredData, 300);
        });
    })();
</script>

<script src="/js/phoneInput.js"></script>
<?= $this->endSection() ?>
