<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold tracking-tight text-foreground">Kelola Galeri Media</h1>
            <p class="text-xs text-muted-foreground mt-0.5">Atur 3 gambar dinamis yang ditampilkan pada section About/Galeri di halaman depan website.</p>
        </div>
        <button type="button" onclick="openGalleryModal()" 
                class="inline-flex items-center gap-2 rounded-lg bg-[#C41E24] hover:bg-[#A8151A] px-4 py-2 text-xs font-semibold text-white shadow-xs transition-colors self-start sm:self-auto cursor-pointer">
            <i data-lucide="plus" class="size-4"></i>
            <span>Tambah Gambar Galeri</span>
        </button>
    </div>

    <!-- Gallery Grid Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php if (empty($galleries)): ?>
            <div class="col-span-full surface-card p-12 text-center text-muted-foreground">
                <i data-lucide="image-off" class="size-8 mx-auto mb-2 opacity-50"></i>
                <p class="text-xs">Belum ada gambar galeri yang terdaftar.</p>
            </div>
        <?php else: ?>
            <?php foreach ($galleries as $g): ?>
                <div class="surface-card overflow-hidden flex flex-col justify-between group">
                    <div class="relative h-48 bg-muted/40 overflow-hidden">
                        <img src="<?= esc($g['image']) ?>" alt="<?= esc($g['title']) ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.src='/img/gallery-1.webp'">
                        <div class="absolute top-2.5 right-2.5 flex items-center gap-1.5">
                            <?php if ($g['is_active'] === '1'): ?>
                                <span class="rounded-full bg-emerald-500 text-white px-2 py-0.5 text-[10px] font-bold shadow-xs">Aktif</span>
                            <?php else: ?>
                                <span class="rounded-full bg-slate-500 text-white px-2 py-0.5 text-[10px] font-bold shadow-xs">Non-Aktif</span>
                            <?php endif; ?>
                            <span class="rounded-full bg-black/60 text-white px-2 py-0.5 text-[10px] font-mono font-bold shadow-xs">#<?= $g['sort_order'] ?></span>
                        </div>
                    </div>
                    
                    <div class="p-4 space-y-3">
                        <div>
                            <h3 class="font-bold text-xs text-foreground truncate"><?= esc($g['title']) ?></h3>
                            <p class="font-mono text-[10px] text-muted-foreground truncate mt-0.5"><?= esc($g['image']) ?></p>
                        </div>

                        <div class="pt-2 border-t border-border flex items-center justify-end gap-2">
                            <button type="button" onclick='editGallery(<?= json_encode($g) ?>)'
                                    class="p-1.5 rounded-md text-muted-foreground hover:text-foreground hover:bg-muted transition-colors text-xs font-medium inline-flex items-center gap-1">
                                <i data-lucide="edit" class="size-3.5"></i>
                                <span>Edit</span>
                            </button>
                            <a href="/gallery/delete/<?= $g['id'] ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus gambar galeri ini?');"
                               class="p-1.5 rounded-md text-red-500 hover:text-red-700 hover:bg-red-50 dark:hover:bg-red-950/30 transition-colors text-xs font-medium inline-flex items-center gap-1">
                                <i data-lucide="trash-2" class="size-3.5"></i>
                                <span>Hapus</span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<!-- Modal Form Galeri -->
<div id="galleryModal" class="fixed inset-0 z-50 hidden bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white dark:bg-slate-850 bg-card border border-slate-200 dark:border-slate-700 rounded-2xl max-w-md w-full p-6 shadow-2xl space-y-4 text-slate-800 dark:text-slate-100 relative z-10" style="background-color: var(--card-bg, #ffffff);">
        <div class="flex items-center justify-between pb-3 border-b border-slate-200 dark:border-slate-700">
            <h2 id="galleryModalTitle" class="text-sm font-bold text-slate-900 dark:text-white">Tambah Gambar Galeri</h2>
            <button type="button" onclick="closeGalleryModal()" class="text-slate-400 hover:text-slate-600 dark:hover:text-white p-1 rounded-md transition-colors">
                <i data-lucide="x" class="size-4"></i>
            </button>
        </div>

        <form action="/gallery/save" method="POST" class="space-y-4">
            <?= csrf_field() ?>
            <input type="hidden" id="galleryId" name="id" value="">

            <div>
                <label for="galleryTitle" class="block text-xs font-semibold text-slate-700 dark:text-slate-200 mb-1">Judul / Label</label>
                <input type="text" id="galleryTitle" name="title" required
                       class="w-full px-3.5 py-2 text-xs rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:outline-none focus:ring-2 focus:ring-[#C41E24]"
                       placeholder="Contoh: Suasana Pelatihan 1">
            </div>

            <?php
            /**
             * PANDUAN PENYIMPANAN & PENGGUNAAN GAMBAR (IMAGE ASSETS GUIDE):
             * -------------------------------------------------------------
             * 1. Lokasi Folder Aset:
             *    - File gambar statis disimpan di folder publik frontend: `Frontend/public/img/`
             *    - Contoh nama file: `gallery-1.webp`, `gallery-2.webp`, `img-course-1.webp`, dll.
             * 2. Format Path di Form CMS:
             *    - Gunakan path absolut web dimulai dengan slash `/`, contoh: `/img/nama-gambar.webp`
             *    - Path ini otomatis dapat diakses oleh Frontend (port 8080) maupun CMS (port 8082).
             * 3. Dukungan Format:
             *    - Disarankan menggunakan format `.webp` untuk kompresi ringan dan pemuatan instan.
             *    - Mendukung format `.png`, `.jpg`, `.jpeg`, atau URL gambar CDN luar (https://...).
             * 4. Dimensi Ideal Galeri:
             *    - Landscape / persegi membulat (aspek rasio 4:3 atau 16:9, min. resolusi 800x600 px).
             */
            ?>
            <div>
                <label for="galleryImage" class="block text-xs font-semibold text-slate-700 dark:text-slate-200 mb-1">Path / URL Gambar <span class="text-red-500">*</span></label>
                <input type="text" id="galleryImage" name="image" required
                       class="w-full px-3.5 py-2 text-xs rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:outline-none focus:ring-2 focus:ring-[#C41E24]"
                       placeholder="Contoh: /img/gallery-1.webp">
                <div class="flex gap-1.5 mt-2">
                    <button type="button" onclick="document.getElementById('galleryImage').value='/img/gallery-1.webp'" class="text-[10px] px-2.5 py-1 rounded bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-600 font-medium transition">/img/gallery-1.webp</button>
                    <button type="button" onclick="document.getElementById('galleryImage').value='/img/gallery-2.webp'" class="text-[10px] px-2.5 py-1 rounded bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-600 font-medium transition">/img/gallery-2.webp</button>
                    <button type="button" onclick="document.getElementById('galleryImage').value='/img/gallery-3.webp'" class="text-[10px] px-2.5 py-1 rounded bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-600 font-medium transition">/img/gallery-3.webp</button>
                </div>
                <p class="text-[10px] text-slate-400 dark:text-slate-500 mt-1.5">File gambar diletakkan pada folder <code>Frontend/public/img/</code> atau gunakan link URL penuh.</p>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label for="gallerySort" class="block text-xs font-semibold text-slate-700 dark:text-slate-200 mb-1">Urutan Tampil</label>
                    <input type="number" id="gallerySort" name="sort_order" value="1"
                           class="w-full px-3.5 py-2 text-xs rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:outline-none focus:ring-2 focus:ring-[#C41E24]">
                </div>
                <div class="flex items-center pt-5">
                    <label class="inline-flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" id="galleryActive" name="is_active" value="1" checked
                               class="size-4 rounded border-slate-300 dark:border-slate-600 text-[#C41E24] focus:ring-[#C41E24]">
                        <span class="text-xs text-slate-700 dark:text-slate-200 font-medium">Status Aktif</span>
                    </label>
                </div>
            </div>

            <div class="pt-3 border-t border-slate-200 dark:border-slate-700 flex items-center justify-end gap-2">
                <button type="button" onclick="closeGalleryModal()" class="px-4 py-2 text-xs font-medium rounded-lg border border-slate-300 dark:border-slate-600 hover:bg-slate-100 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 transition-colors">Batal</button>
                <button type="submit" class="px-5 py-2 text-xs rounded-lg bg-[#C41E24] hover:bg-[#A8151A] text-white font-semibold shadow-xs transition-colors">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openGalleryModal() {
        document.getElementById('galleryId').value = '';
        document.getElementById('galleryTitle').value = '';
        document.getElementById('galleryImage').value = '/img/gallery-1.webp';
        document.getElementById('gallerySort').value = '1';
        document.getElementById('galleryActive').checked = true;
        document.getElementById('galleryModalTitle').innerText = 'Tambah Gambar Galeri';
        document.getElementById('galleryModal').classList.remove('hidden');
    }

    function editGallery(item) {
        document.getElementById('galleryId').value = item.id;
        document.getElementById('galleryTitle').value = item.title;
        document.getElementById('galleryImage').value = item.image;
        document.getElementById('gallerySort').value = item.sort_order;
        document.getElementById('galleryActive').checked = (item.is_active === '1');
        document.getElementById('galleryModalTitle').innerText = 'Edit Gambar Galeri';
        document.getElementById('galleryModal').classList.remove('hidden');
    }

    function closeGalleryModal() {
        document.getElementById('galleryModal').classList.add('hidden');
    }
</script>

<?= $this->endSection() ?>
