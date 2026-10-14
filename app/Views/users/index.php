<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold text-foreground">Kelola Administrator VLC</h1>
            <p class="text-xs text-muted-foreground mt-0.5">Kelola hak akses akun Superadmin dan Admin untuk operasional CMS VLC (tersimpan di <code>tblvlcadministrator</code>).</p>
        </div>
        <button type="button" onclick="openAddUserModal()" 
                class="inline-flex items-center gap-2 rounded-lg bg-[#C41E24] hover:bg-[#a0181d] text-white px-3.5 py-2 text-xs font-semibold shadow-xs transition-colors self-start sm:self-auto cursor-pointer">
            <i data-lucide="user-plus" class="size-4"></i>
            <span>Tambah Admin Baru</span>
        </button>
    </div>

    <!-- Search Bar -->
    <div class="flex items-center justify-between gap-3">
        <form method="GET" action="/users" class="relative w-full max-w-xs">
            <input type="text" name="q" value="<?= esc($keyword ?? '') ?>" placeholder="Cari nama, username, email..." 
                   class="w-full rounded-lg border border-border bg-background pl-8 pr-3 py-1.5 text-xs text-foreground placeholder:text-muted-foreground focus:outline-hidden focus:ring-1 focus:ring-[#C41E24]">
            <i data-lucide="search" class="size-3.5 absolute left-2.5 top-1/2 -translate-y-1/2 text-muted-foreground"></i>
        </form>
        <span class="text-xs text-muted-foreground">Total: <strong><?= count($users) ?></strong> Administrator</span>
    </div>

    <!-- Table -->
    <div class="surface-card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-muted/50 border-b border-border text-muted-foreground uppercase text-[10px] tracking-wider">
                    <tr>
                        <th class="px-4 py-3 font-semibold">Administrator</th>
                        <th class="px-4 py-3 font-semibold">Username</th>
                        <th class="px-4 py-3 font-semibold">Email</th>
                        <th class="px-4 py-3 font-semibold text-center">Role</th>
                        <th class="px-4 py-3 font-semibold text-center">Status</th>
                        <th class="px-4 py-3 font-semibold">Terakhir Login</th>
                        <th class="px-4 py-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <?php if (empty($users)): ?>
                        <tr>
                            <td colspan="7" class="px-4 py-12 text-center text-muted-foreground">
                                <i data-lucide="shield-off" class="size-8 mx-auto mb-2 opacity-50"></i>
                                <p class="text-xs">Belum ada akun admin yang sesuai pencarian.</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($users as $u): ?>
                            <?php $isSelf = ((int)$u['userID'] === (int)$currentAdmin['id']); ?>
                            <tr class="hover:bg-muted/20 transition-colors">
                                <td class="px-4 py-3.5">
                                    <div class="flex items-center gap-2">
                                        <div class="size-7 rounded-full bg-muted flex items-center justify-center text-muted-foreground shrink-0 border border-border">
                                            <i data-lucide="user" class="size-3.5"></i>
                                        </div>
                                        <div>
                                            <span class="font-semibold text-foreground text-xs"><?= esc($u['name']) ?></span>
                                            <?php if ($isSelf): ?>
                                                <span class="ml-1 text-[10px] text-emerald-600 font-bold">(Anda)</span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3.5 font-mono text-[11px] text-muted-foreground">
                                    @<?= esc($u['userName']) ?>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground">
                                    <?= esc($u['email']) ?>
                                </td>
                                <td class="px-4 py-3.5 text-center">
                                    <?php if ($u['roleName'] === 'superadmin'): ?>
                                        <span class="inline-flex items-center rounded-full bg-red-500/10 text-[#C41E24] border border-red-500/20 px-2 py-0.5 text-[10px] font-bold">
                                            Superadmin
                                        </span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center rounded-full bg-blue-500/10 text-blue-600 border border-blue-500/20 px-2 py-0.5 text-[10px] font-semibold">
                                            Admin
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3.5 text-center">
                                    <?php if ($u['active'] === '1'): ?>
                                        <span class="inline-flex items-center rounded-full bg-emerald-500/10 text-emerald-600 border border-emerald-500/20 px-2 py-0.5 text-[10px] font-semibold">
                                            Active
                                        </span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center rounded-full bg-slate-500/10 text-slate-500 border border-slate-500/20 px-2 py-0.5 text-[10px] font-semibold">
                                            Disabled
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground font-mono text-[11px]">
                                    <?= !empty($u['lastLogin']) ? esc($u['lastLogin']) : 'Belum pernah login' ?>
                                </td>
                                <td class="px-4 py-3.5 text-right whitespace-nowrap">
                                    <?php if (!$isSelf): ?>
                                        <div class="flex items-center justify-end gap-1.5">
                                            <!-- Toggle Status -->
                                            <form action="/users/toggle-status/<?= $u['userID'] ?>" method="POST" class="inline" onsubmit="return confirm('Ubah status aktif akun ini?');">
                                                <?= csrf_field() ?>
                                                <button type="submit" 
                                                        class="px-2 py-1 rounded border border-border text-[11px] font-medium hover:bg-muted transition-colors cursor-pointer"
                                                        title="<?= $u['active'] === '1' ? 'Nonaktifkan akun' : 'Aktifkan akun' ?>">
                                                    <?= $u['active'] === '1' ? 'Nonaktifkan' : 'Aktifkan' ?>
                                                </button>
                                            </form>

                                            <!-- Delete Button -->
                                            <form action="/users/delete/<?= $u['userID'] ?>" method="POST" class="inline" onsubmit="return confirm('Hapus akun administrator ini secara permanen? Tindakan ini tidak dapat dibatalkan.');">
                                                <?= csrf_field() ?>
                                                <button type="submit" 
                                                        class="p-1 rounded text-red-600 hover:bg-red-500/10 transition-colors cursor-pointer"
                                                        title="Hapus Admin">
                                                    <i data-lucide="trash-2" class="size-4"></i>
                                                </button>
                                            </form>
                                        </div>
                                    <?php else: ?>
                                        <span class="text-[11px] text-muted-foreground italic">Akun Anda</span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal: Tambah Admin Baru -->
<div id="addUserModal" class="fixed inset-0 z-50 hidden bg-black/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-card w-full max-w-md rounded-2xl border border-border shadow-2xl p-6 relative">
        <div class="flex items-center justify-between pb-4 border-b border-border">
            <div>
                <h3 class="text-base font-bold text-foreground">Tambah Admin Baru</h3>
                <p class="text-xs text-muted-foreground mt-0.5">Buat akun pengelola untuk akses CMS VLC.</p>
            </div>
            <button type="button" onclick="closeAddUserModal()" class="text-muted-foreground hover:text-foreground p-1 rounded-lg">
                <i data-lucide="x" class="size-5"></i>
            </button>
        </div>

        <form action="/users/save" method="POST" class="space-y-4 pt-4">
            <?= csrf_field() ?>
            <div>
                <label class="block text-xs font-semibold text-foreground mb-1.5">Nama Lengkap *</label>
                <input type="text" name="name" required placeholder="Contoh: Raka Herdika"
                       class="w-full rounded-lg border border-border bg-background px-3 py-2 text-xs text-foreground placeholder:text-muted-foreground focus:outline-hidden focus:ring-1 focus:ring-[#C41E24]">
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label class="block text-xs font-semibold text-foreground mb-1.5">Username *</label>
                    <input type="text" name="username" required placeholder="contoh: rakah"
                           class="w-full rounded-lg border border-border bg-background px-3 py-2 text-xs text-foreground placeholder:text-muted-foreground focus:outline-hidden focus:ring-1 focus:ring-[#C41E24]">
                </div>
                <div>
                    <label class="block text-xs font-semibold text-foreground mb-1.5">Role Akses *</label>
                    <select name="role" class="w-full rounded-lg border border-border bg-background px-3 py-2 text-xs text-foreground focus:outline-hidden focus:ring-1 focus:ring-[#C41E24]">
                        <option value="admin">Admin (Operasional VLC)</option>
                        <option value="superadmin">Superadmin (Full Access + Kelola Admin)</option>
                    </select>
                </div>
            </div>

            <div>
                <label class="block text-xs font-semibold text-foreground mb-1.5">Alamat Email *</label>
                <input type="email" name="email" required placeholder="contoh: raka@b-universe.id"
                       class="w-full rounded-lg border border-border bg-background px-3 py-2 text-xs text-foreground placeholder:text-muted-foreground focus:outline-hidden focus:ring-1 focus:ring-[#C41E24]">
            </div>

            <div>
                <label class="block text-xs font-semibold text-foreground mb-1.5">Password Awal *</label>
                <input type="password" name="password" required minlength="6" placeholder="Minimal 6 karakter"
                       class="w-full rounded-lg border border-border bg-background px-3 py-2 text-xs text-foreground placeholder:text-muted-foreground focus:outline-hidden focus:ring-1 focus:ring-[#C41E24]">
                <p class="text-[10px] text-muted-foreground mt-1">Admin yang dibuat dapat mengganti password mereka secara mandiri melalui menu Profil.</p>
            </div>

            <div class="flex items-center justify-end gap-2 pt-3 border-t border-border">
                <button type="button" onclick="closeAddUserModal()" 
                        class="px-4 py-2 rounded-lg border border-border text-xs font-semibold text-foreground hover:bg-muted transition-colors cursor-pointer">
                    Batal
                </button>
                <button type="submit" 
                        class="px-4 py-2 rounded-lg bg-[#C41E24] hover:bg-[#a0181d] text-white text-xs font-bold shadow-xs transition-colors cursor-pointer">
                    Simpan Admin
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function openAddUserModal() {
        const modal = document.getElementById('addUserModal');
        modal.classList.remove('hidden');
        if (window.lucide) lucide.createIcons();
    }
    function closeAddUserModal() {
        document.getElementById('addUserModal').classList.add('hidden');
    }
</script>
<?= $this->endSection() ?>
