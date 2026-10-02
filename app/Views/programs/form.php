<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <div>
            <div class="flex items-center gap-2">
                <a href="/programs" class="text-muted-foreground hover:text-foreground">
                    <i data-lucide="arrow-left" class="size-4"></i>
                </a>
                <h1 class="text-xl font-bold tracking-tight text-foreground">
                    <?= $program ? 'Edit Program' : 'Tambah Program Baru' ?>
                </h1>
            </div>
            <p class="text-xs text-muted-foreground mt-0.5 ml-6">
                <?= $program ? 'Perbarui data program dan kelola kurikulum modul pembelajaran.' : 'Isi formulir untuk menambahkan program baru ke katalog belajar.' ?>
            </p>
        </div>
    </div>

    <!-- Main Program Form -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        <!-- Program Details Form (7 Cols) -->
        <div class="lg:col-span-7 space-y-6">
            <div class="surface-card p-6">
                <h2 class="text-sm font-semibold text-foreground mb-4">Informasi Dasar Program</h2>
                
                <form action="<?= $program ? '/programs/update/' . $program['id'] : '/programs/create' ?>" method="POST" class="space-y-4">
                    <?= csrf_field() ?>

                    <div>
                        <label for="name" class="block text-xs font-medium text-foreground mb-1">Nama Program *</label>
                        <input type="text" id="name" name="name" value="<?= esc(old('name') ?? $program['name'] ?? '') ?>" required
                               class="w-full px-3 py-2 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                               placeholder="Contoh: ESGRC (Governance, Risk, and Compliance)">
                    </div>

                    <div>
                        <label for="short_desc" class="block text-xs font-medium text-foreground mb-1">Deskripsi Singkat</label>
                        <textarea id="short_desc" name="short_desc" rows="2"
                                  class="w-full px-3 py-2 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                                  placeholder="Ringkasan 1-2 kalimat untuk kartu katalog..."><?= esc(old('short_desc') ?? $program['short_desc'] ?? '') ?></textarea>
                    </div>

                    <div>
                        <label for="description" class="block text-xs font-medium text-foreground mb-1">Deskripsi Lengkap / Silabus</label>
                        <textarea id="description" name="description" rows="5"
                                  class="w-full px-3 py-2 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                                  placeholder="Penjelasan detail tujuan, target audiens, dan manfaat program..."><?= esc(old('description') ?? $program['description'] ?? '') ?></textarea>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="duration" class="block text-xs font-medium text-foreground mb-1">Durasi</label>
                            <input type="text" id="duration" name="duration" value="<?= esc(old('duration') ?? $program['duration'] ?? '12 Modul (3 Hari)') ?>"
                                   class="w-full px-3 py-2 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                        </div>

                        <div>
                            <label for="schedule_info" class="block text-xs font-medium text-foreground mb-1">Jadwal / Waktu</label>
                            <input type="text" id="schedule_info" name="schedule_info" value="<?= esc(old('schedule_info') ?? $program['schedule_info'] ?? 'Online & On-site') ?>"
                                   class="w-full px-3 py-2 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div>
                            <label for="status" class="block text-xs font-medium text-foreground mb-1">Status Publikasi</label>
                            <select id="status" name="status" class="w-full px-3 py-2 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                                <option value="active" <?= ($program['status'] ?? '') === 'active' ? 'selected' : '' ?>>Aktif</option>
                                <option value="draft" <?= ($program['status'] ?? 'draft') === 'draft' ? 'selected' : '' ?>>Draft</option>
                                <option value="inactive" <?= ($program['status'] ?? '') === 'inactive' ? 'selected' : '' ?>>Non-Aktif</option>
                            </select>
                        </div>

                        <div>
                            <label for="max_participants" class="block text-xs font-medium text-foreground mb-1">Kapasitas Peserta</label>
                            <input type="number" id="max_participants" name="max_participants" value="<?= esc(old('max_participants') ?? $program['max_participants'] ?? 50) ?>"
                                   class="w-full px-3 py-2 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                        </div>

                        <div>
                            <label for="price" class="block text-xs font-medium text-foreground mb-1">Harga (Rp)</label>
                            <input type="number" id="price" name="price" value="<?= esc(old('price') ?? $program['price'] ?? 0) ?>"
                                   class="w-full px-3 py-2 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                        </div>
                    </div>

                    <div class="pt-2">
                        <label class="inline-flex items-center gap-2 cursor-pointer">
                            <input type="checkbox" name="has_certificate" value="1" <?= (!empty($program['has_certificate'])) ? 'checked' : '' ?>
                                   class="rounded border-border text-[#C41E24] focus:ring-[#C41E24]">
                            <span class="text-xs text-foreground font-medium">Menyediakan Sertifikat Kelulusan</span>
                        </label>
                    </div>

                    <div class="pt-4 border-t border-border flex items-center justify-end gap-2">
                        <a href="/programs" class="rounded-md border border-border px-4 py-2 text-xs font-medium text-foreground hover:bg-muted transition-colors">
                            Batal
                        </a>
                        <button type="submit" class="rounded-md bg-[#C41E24] hover:bg-[#8E1418] px-4 py-2 text-xs font-semibold text-white shadow-xs transition-colors">
                            <i data-lucide="save" class="size-3.5 inline mr-1"></i>
                            <?= $program ? 'Simpan Perubahan' : 'Buat Program' ?>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modules Management (5 Cols) -->
        <div class="lg:col-span-5 space-y-6">
            <?php if ($program): ?>
                <div class="surface-card p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <i data-lucide="list-ordered" class="size-4 text-[#F5841F]"></i>
                            <h2 class="text-sm font-semibold text-foreground">Modul & Materi (<?= count($modules) ?>)</h2>
                        </div>
                    </div>

                    <!-- Existing Modules List -->
                    <div class="space-y-2 mb-6">
                        <?php if (empty($modules)): ?>
                            <p class="text-xs text-muted-foreground py-4 text-center">Belum ada modul untuk program ini.</p>
                        <?php else: ?>
                            <?php foreach ($modules as $idx => $m): ?>
                                <div class="flex items-center justify-between p-2.5 rounded-md border border-border bg-card/60">
                                    <div class="flex items-center gap-2 min-w-0 pr-2">
                                        <span class="size-5 rounded-full bg-muted flex items-center justify-center text-[10px] font-bold text-muted-foreground shrink-0">
                                            <?= $idx + 1 ?>
                                        </span>
                                        <div class="min-w-0">
                                            <p class="text-xs font-medium text-foreground truncate"><?= esc($m['title']) ?></p>
                                            <div class="flex items-center gap-2 text-[10px] text-muted-foreground">
                                                <span><?= (int)$m['duration_minutes'] ?> menit</span>
                                                <?php if ($m['has_video']): ?>
                                                    <span class="text-blue-500 font-medium flex items-center gap-0.5">
                                                        <i data-lucide="video" class="size-2.5"></i> Video
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/programs/delete-module/<?= $m['id'] ?>" onclick="return confirm('Hapus modul ini?');" class="text-muted-foreground hover:text-red-500 p-1 rounded" title="Hapus Modul">
                                        <i data-lucide="trash-2" class="size-3.5"></i>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Add Module Form -->
                    <div class="pt-4 border-t border-border">
                        <h3 class="text-xs font-semibold text-foreground mb-3">+ Tambah Modul Baru</h3>
                        <form action="/programs/add-module/<?= $program['id'] ?>" method="POST" class="space-y-3">
                            <?= csrf_field() ?>
                            <div>
                                <input type="text" name="module_title" required placeholder="Judul Modul..."
                                       class="w-full px-3 py-1.5 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                            </div>
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <input type="number" name="duration_minutes" value="45" placeholder="Durasi (menit)"
                                           class="w-full px-3 py-1.5 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                                </div>
                                <div class="flex items-center pl-1">
                                    <label class="inline-flex items-center gap-1.5 cursor-pointer">
                                        <input type="checkbox" name="has_video" value="1" checked class="rounded border-border text-[#C41E24] focus:ring-[#C41E24]">
                                        <span class="text-[11px] text-muted-foreground">Ada Video</span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="w-full rounded-md bg-[#F5841F] hover:bg-[#d97316] py-1.5 text-xs font-semibold text-white shadow-xs transition-colors">
                                Simpan Modul
                            </button>
                        </form>
                    </div>
                </div>
            <?php else: ?>
                <div class="surface-card p-6 text-center text-muted-foreground">
                    <i data-lucide="info" class="size-8 mx-auto mb-2 text-[#F5841F]"></i>
                    <p class="text-xs font-medium text-foreground">Modul Pembelajaran</p>
                    <p class="text-[11px] text-muted-foreground mt-1">
                        Setelah menyimpan informasi dasar program, Anda dapat menambahkan modul dan kurikulum materi pada panel ini.
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
