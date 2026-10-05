<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="max-w-4xl space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold tracking-tight text-foreground">Profil Administrator</h1>
            <p class="text-xs text-muted-foreground mt-0.5">Kelola informasi akun administrator dan perbarui kata sandi akun Anda.</p>
        </div>
    </div>

    <!-- Flash alerts -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="flex items-center gap-2.5 rounded-lg border border-red-500/30 bg-red-500/10 p-3 text-xs text-red-600">
            <i data-lucide="alert-circle" class="size-4 shrink-0"></i>
            <span><?= esc(session()->getFlashdata('error')) ?></span>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="flex items-center gap-2.5 rounded-lg border border-emerald-500/30 bg-emerald-500/10 p-3 text-xs text-emerald-600">
            <i data-lucide="check-circle-2" class="size-4 shrink-0"></i>
            <span><?= esc(session()->getFlashdata('success')) ?></span>
        </div>
    <?php endif; ?>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Detail Akun Admin -->
        <div class="surface-card p-6 space-y-5 md:col-span-1">
            <div class="text-center pb-4 border-b border-border">
                <div class="size-16 rounded-full bg-[#C41E24] text-white flex items-center justify-center font-bold text-2xl mx-auto shadow-md shadow-red-600/20 mb-3 border-2 border-white">
                    <?= esc(substr($admin['name'] ?? 'A', 0, 1)) ?>
                </div>
                <h2 class="font-bold text-sm text-foreground"><?= esc($admin['name'] ?? '-') ?></h2>
                <p class="text-xs text-muted-foreground mt-0.5"><?= esc($admin['email']) ?></p>
                <div class="mt-2.5">
                    <span class="inline-flex items-center rounded-full bg-[#C41E24]/10 px-2.5 py-0.5 text-[10px] font-bold text-[#C41E24] border border-[#C41E24]/20 uppercase">
                        <?= esc($admin['roleName'] ?? 'Administrator') ?>
                    </span>
                </div>
            </div>

            <div class="space-y-3 text-xs">
                <div>
                    <span class="block text-[10px] font-bold text-muted-foreground uppercase tracking-wider">Username</span>
                    <span class="font-medium text-foreground"><?= esc($admin['userName'] ?? '-') ?></span>
                </div>
                <div>
                    <span class="block text-[10px] font-bold text-muted-foreground uppercase tracking-wider">Status Akun</span>
                    <span class="font-medium text-emerald-600">Aktif</span>
                </div>
                <div>
                    <span class="block text-[10px] font-bold text-muted-foreground uppercase tracking-wider">Terakhir Login</span>
                    <span class="font-medium text-foreground"><?= esc($admin['lastLogin'] ?? 'Baru saja') ?></span>
                </div>
            </div>
        </div>

        <!-- Card 2: Form Ganti Password -->
        <div class="surface-card p-6 md:col-span-2 space-y-5">
            <div class="pb-3 border-b border-border">
                <h2 class="text-sm font-bold text-foreground">Ganti Password Administrator</h2>
                <p class="text-xs text-muted-foreground">Pastikan kata sandi baru Anda kuat dan sulit ditebak.</p>
            </div>

            <form action="/profile/update-password" method="POST" class="space-y-4">
                <?= csrf_field() ?>

                <!-- Current Password -->
                <div>
                    <label for="current_password" class="block text-xs font-semibold text-foreground mb-1.5">
                        Password Saat Ini <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="password" id="current_password" name="current_password" required
                               class="w-full rounded-lg border border-border bg-background px-3.5 pr-10 py-2 text-xs text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                               placeholder="Masukkan password saat ini">
                        <button type="button" onclick="togglePasswordVisibility('current_password', this)"
                                class="absolute inset-y-0 right-0 flex items-center pr-3 text-muted-foreground hover:text-foreground focus:outline-none"
                                title="Tampilkan / Sembunyikan Password">
                            <i data-lucide="eye" class="size-4"></i>
                        </button>
                    </div>
                </div>

                <!-- New Password -->
                <div>
                    <label for="new_password" class="block text-xs font-semibold text-foreground mb-1.5">
                        Password Baru <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="password" id="new_password" name="new_password" required minlength="6"
                               class="w-full rounded-lg border border-border bg-background px-3.5 pr-10 py-2 text-xs text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                               placeholder="Minimal 6 karakter">
                        <button type="button" onclick="togglePasswordVisibility('new_password', this)"
                                class="absolute inset-y-0 right-0 flex items-center pr-3 text-muted-foreground hover:text-foreground focus:outline-none"
                                title="Tampilkan / Sembunyikan Password">
                            <i data-lucide="eye" class="size-4"></i>
                        </button>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="confirm_password" class="block text-xs font-semibold text-foreground mb-1.5">
                        Konfirmasi Password Baru <span class="text-red-500">*</span>
                    </label>
                    <div class="relative">
                        <input type="password" id="confirm_password" name="confirm_password" required minlength="6"
                               class="w-full rounded-lg border border-border bg-background px-3.5 pr-10 py-2 text-xs text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                               placeholder="Ulangi password baru">
                        <button type="button" onclick="togglePasswordVisibility('confirm_password', this)"
                                class="absolute inset-y-0 right-0 flex items-center pr-3 text-muted-foreground hover:text-foreground focus:outline-none"
                                title="Tampilkan / Sembunyikan Password">
                            <i data-lucide="eye" class="size-4"></i>
                        </button>
                    </div>
                </div>

                <div class="pt-2 flex justify-end">
                    <button type="submit" 
                            class="inline-flex items-center gap-2 rounded-lg bg-[#C41E24] hover:bg-[#A8151A] px-4 py-2.5 text-xs font-semibold text-white shadow-xs transition-colors cursor-pointer">
                        <i data-lucide="key-round" class="size-3.5"></i>
                        <span>Simpan Perubahan Password</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function togglePasswordVisibility(inputId, btn) {
        const input = document.getElementById(inputId);
        const icon = btn.querySelector('[data-lucide]');
        if (input.type === 'password') {
            input.type = 'text';
            icon.setAttribute('data-lucide', 'eye-off');
        } else {
            input.type = 'password';
            icon.setAttribute('data-lucide', 'eye');
        }
        if (window.lucide) {
            lucide.createIcons();
        }
    }
</script>

<?= $this->endSection() ?>
