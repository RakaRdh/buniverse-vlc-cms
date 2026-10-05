<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="max-w-4xl space-y-6">
    <!-- Header -->
    <div class="flex items-center justify-between">
        <div>
            <div class="flex items-center gap-2">
                <a href="/programs" class="text-muted-foreground hover:text-foreground">
                    <i data-lucide="arrow-left" class="size-4"></i>
                </a>
                <h1 class="text-xl font-bold tracking-tight text-foreground">
                    <?= $program ? 'Edit Program Pelatihan' : 'Tambah Program Baru' ?>
                </h1>
            </div>
            <p class="text-xs text-muted-foreground mt-0.5 ml-6">
                <?= $program ? 'Perbarui informasi detail program pelatihan dan thumbnail kursus.' : 'Isi formulir untuk menambahkan program baru ke katalog pelatihan.' ?>
            </p>
        </div>
    </div>

    <!-- Main Program Form -->
    <div class="surface-card p-6">
        <form action="<?= $program ? '/programs/update/' . $program['id'] : '/programs/create' ?>" method="POST" enctype="multipart/form-data" class="space-y-5">
            <?= csrf_field() ?>

            <!-- Program Title -->
            <div>
                <label for="name" class="block text-xs font-semibold text-foreground mb-1.5">Nama Program Pelatihan <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" value="<?= esc(old('name') ?? $program['name'] ?? '') ?>" required
                       class="w-full px-3.5 py-2.5 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                       placeholder="Contoh: Financial Modeling & Corporate Valuation">
            </div>

            <?php
            /**
             * PANDUAN PENGELOLAAN THUMBNAIL PROGRAM:
             * -------------------------------------------------------------
             * 1. Lokasi Aset: File gambar disimpan di `Frontend/public/img/` (misal: `img-course-1.webp`, `img-course-2.webp`).
             * 2. Format Input: Masukkan path web diawali slash (contoh: `/img/nama-file.webp`) atau URL gambar CDN.
             * 3. Rekomendasi Resolusi: Rasio 16:9 atau 4:3 (contoh: 1280x720 atau 800x450 px) dalam format .webp untuk kecepatan maksimal.
             * 4. Live Preview: Kotak di samping kiri akan otomatis menguji dan menampilkan gambar begitu path diinput.
             */
            ?>
            <div class="rounded-xl border border-border p-4 bg-muted/20 space-y-3">
                <label class="block text-xs font-semibold text-foreground">Gambar Thumbnail Program <span class="text-red-500">*</span></label>
                
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <!-- Live Image Preview Box -->
                    <div class="size-28 sm:size-32 rounded-lg border border-border bg-muted/40 overflow-hidden shrink-0 flex items-center justify-center">
                        <img id="programImagePreview" 
                             src="<?= esc($program['image'] ?? '/img/img-course-1.webp') ?>" 
                             alt="Preview Thumbnail" 
                             class="w-full h-full object-cover"
                             onerror="this.src='/img/img-course-1.webp'">
                    </div>

                    <!-- Options: Text Input + Presets -->
                    <div class="flex-1 space-y-2.5 w-full">
                        <div>
                            <span class="block text-[11px] text-muted-foreground mb-1">Path / URL Gambar Thumbnail:</span>
                            <input type="text" id="programImageInput" name="image" 
                                   value="<?= esc(old('image') ?? $program['image'] ?? '/img/img-course-1.webp') ?>" 
                                   oninput="updateThumbnailPreview(this.value)"
                                   class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                                   placeholder="/img/img-course-1.webp atau URL gambar">
                        </div>

                        <!-- Quick Preset Choices -->
                        <div>
                            <span class="block text-[10px] font-bold text-muted-foreground uppercase tracking-wider mb-1.5">Pilih Aset Gambar Cepat:</span>
                            <div class="flex flex-wrap gap-2">
                                <button type="button" onclick="setThumbnailPreset('/img/img-course-1.webp')"
                                        class="px-2.5 py-1 rounded-md text-[11px] border border-border bg-background hover:bg-muted text-foreground transition-colors">
                                    Course 1 (ESGRC)
                                </button>
                                <button type="button" onclick="setThumbnailPreset('/img/img-course-2.webp')"
                                        class="px-2.5 py-1 rounded-md text-[11px] border border-border bg-background hover:bg-muted text-foreground transition-colors">
                                    Course 2 (Financial)
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Short Description -->
            <div>
                <label for="short_desc" class="block text-xs font-semibold text-foreground mb-1.5">Deskripsi Singkat</label>
                <textarea id="short_desc" name="short_desc" rows="2"
                          class="w-full px-3.5 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                          placeholder="Ringkasan 1-2 kalimat yang tampil di kartu katalog..."><?= esc(old('short_desc') ?? $program['short_desc'] ?? '') ?></textarea>
            </div>

            <!-- Full Description / Syllabus -->
            <div>
                <label for="description" class="block text-xs font-semibold text-foreground mb-1.5">Deskripsi Lengkap / Detail Kelas</label>
                <textarea id="description" name="description" rows="4"
                          class="w-full px-3.5 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                          placeholder="Tujuan pelatihan, topik yang dibahas, dan instruktur..."><?= esc(old('description') ?? $program['description'] ?? '') ?></textarea>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                    <label for="duration" class="block text-xs font-semibold text-foreground mb-1.5">Durasi / Format Belajar</label>
                    <input type="text" id="duration" name="duration" value="<?= esc(old('duration') ?? $program['duration'] ?? '3 Hari') ?>"
                           class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                           placeholder="Contoh: 3 Hari / Hybrid">
                </div>

                <div>
                    <label for="schedule_info" class="block text-xs font-semibold text-foreground mb-1.5">Jadwal / Batch Info</label>
                    <input type="text" id="schedule_info" name="schedule_info" value="<?= esc(old('schedule_info') ?? $program['schedule_info'] ?? 'Batch 1 — Oktober 2026') ?>"
                           class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                           placeholder="Contoh: Batch 1 — Oktober 2026">
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div>
                    <label for="status" class="block text-xs font-semibold text-foreground mb-1.5">Status Publikasi</label>
                    <select id="status" name="status" class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                        <option value="active" <?= ($program['status'] ?? '') === 'active' ? 'selected' : '' ?>>Aktif (Tampil di Frontend)</option>
                        <option value="draft" <?= ($program['status'] ?? 'draft') === 'draft' ? 'selected' : '' ?>>Draft</option>
                        <option value="inactive" <?= ($program['status'] ?? '') === 'inactive' ? 'selected' : '' ?>>Non-Aktif</option>
                    </select>
                </div>

                <div>
                    <label for="max_participants" class="block text-xs font-semibold text-foreground mb-1.5">Kapasitas Peserta</label>
                    <input type="number" id="max_participants" name="max_participants" value="<?= esc(old('max_participants') ?? $program['max_participants'] ?? 30) ?>"
                           class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                </div>

                <div>
                    <label for="price" class="block text-xs font-semibold text-foreground mb-1.5">Harga / Investasi (Rp)</label>
                    <input type="number" id="price" name="price" value="<?= esc(old('price') ?? $program['price'] ?? 0) ?>"
                           class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                           placeholder="0">
                </div>
            </div>

            <div class="pt-2">
                <label class="inline-flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" name="has_certificate" value="1" <?= (!empty($program['has_certificate'])) ? 'checked' : '' ?>
                           class="rounded border-border text-[#C41E24] focus:ring-[#C41E24]">
                    <span class="text-xs text-foreground font-medium">Menyediakan Sertifikat Kelulusan Resmi</span>
                </label>
            </div>

            <div class="pt-4 border-t border-border flex items-center justify-end gap-2.5">
                <a href="/programs" class="rounded-lg border border-border px-4 py-2 text-xs font-medium text-foreground hover:bg-muted transition-colors">
                    Batal
                </a>
                <button type="submit" 
                        class="inline-flex items-center gap-2 rounded-lg bg-[#C41E24] hover:bg-[#A8151A] px-5 py-2 text-xs font-semibold text-white shadow-xs transition-colors cursor-pointer">
                    <i data-lucide="save" class="size-3.5"></i>
                    <span><?= $program ? 'Simpan Perubahan Program' : 'Buat Program Sekarang' ?></span>
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    function updateThumbnailPreview(val) {
        const preview = document.getElementById('programImagePreview');
        if (val && val.trim() !== '') {
            preview.src = val.trim();
        } else {
            preview.src = '/img/img-course-1.webp';
        }
    }

    function setThumbnailPreset(path) {
        document.getElementById('programImageInput').value = path;
        updateThumbnailPreview(path);
    }
</script>

<?= $this->endSection() ?>
