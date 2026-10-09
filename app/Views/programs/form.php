<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="w-full space-y-6">
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
        <form id="programForm" action="<?= $program ? '/programs/update/' . $program['id'] : '/programs/create' ?>" method="POST" enctype="multipart/form-data" class="space-y-5">
            <?= csrf_field() ?>

            <!-- Program Title -->
            <div>
                <label for="name" class="block text-xs font-semibold text-foreground mb-1.5">Nama Program Pelatihan <span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" value="<?= esc(old('name') ?? $program['name'] ?? '') ?>" required
                       class="w-full px-3.5 py-2.5 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                       placeholder="Contoh: Financial Modeling & Corporate Valuation">
            </div>

            <!-- Thumbnail Management -->
            <div class="rounded-xl border border-border p-4 bg-muted/20 space-y-3">
                <label class="block text-xs font-semibold text-foreground">Thumbnail Program <span class="text-red-500">*</span></label>
                
                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <!-- Live Image Preview Box -->
                    <div class="size-28 sm:size-32 rounded-lg border border-border bg-muted/40 overflow-hidden shrink-0 flex items-center justify-center">
                        <img id="programImagePreview" 
                             src="<?= esc($program['image'] ?? '/img/img-course-1.webp') ?>" 
                             alt="Preview Thumbnail" 
                             class="w-full h-full object-cover"
                             onerror="this.src='/img/img-course-1.webp'">
                    </div>

                    <!-- Upload File & Hidden Existing Path -->
                    <div class="flex-1 space-y-2.5 w-full">
                        <div>
                            <span class="block text-[11px] font-semibold text-foreground mb-1">Unggah Berkas Gambar (ke public/uploads):</span>
                            <input type="file" id="thumbnail_file" name="thumbnail_file" accept="image/png,image/jpeg,image/webp,image/svg+xml"
                                   onchange="previewUploadedImage(this)"
                                   class="w-full text-xs text-muted-foreground file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-[#C41E24] file:text-white hover:file:bg-[#A8151A] cursor-pointer">
                            <input type="hidden" id="programImageInput" name="image" 
                                   value="<?= esc(old('image') ?? $program['image'] ?? '/img/img-course-1.webp') ?>">
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

            <!-- Full Description / Syllabus (WYSIWYG CKEditor) -->
            <div>
                <label for="description" class="block text-xs font-semibold text-foreground mb-1.5">Deskripsi Lengkap / Detail Kelas</label>
                <textarea id="description" name="description" rows="6"
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

<!-- Load CKEditor 4 WYSIWYG (Contek dari Revamp CMS Investor) -->
<script src="https://cdn.ckeditor.com/4.22.1/full-all/ckeditor.js"></script>

<script>
    let programCkEditor = null;

    function updateThumbnailPreview(val) {
        const preview = document.getElementById('programImagePreview');
        if (val && val.trim() !== '') {
            preview.src = val.trim();
        } else {
            preview.src = '/img/img-course-1.webp';
        }
    }

    function previewUploadedImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('programImagePreview').src = e.target.result;
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    document.addEventListener('DOMContentLoaded', function () {
        const descTextarea = document.getElementById('description');
        if (descTextarea && window.CKEDITOR) {
            // Inject typography & Dark Mode styles directly into CKEditor's iframe
            CKEDITOR.addCss(`
                html { color-scheme: light; }
                html.dark { color-scheme: dark; }
                body.cke_editable {
                    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                    font-size: 13px;
                    line-height: 1.75;
                    padding: 18px;
                    margin: 0;
                    cursor: text;
                    color: #1e293b;
                    background-color: #ffffff;
                }
                html.dark body.cke_editable,
                body.cke_editable.dark,
                body.cke_editable.dark-mode {
                    background-color: #0f172a !important;
                    color: #f1f5f9 !important;
                    caret-color: #38bdf8 !important;
                }
                html.dark body.cke_editable a,
                body.cke_editable.dark-mode a {
                    color: #60a5fa !important;
                    text-decoration: underline;
                }
                body.cke_editable blockquote {
                    background-color: #f0f7ff !important;
                    border-left: 4px solid #C41E24 !important;
                    color: #1e3a8a !important;
                    padding: 10px 16px !important;
                    margin: 14px 0 !important;
                    border-radius: 0 6px 6px 0 !important;
                }
                html.dark body.cke_editable blockquote {
                    background-color: rgba(30, 41, 59, 0.75) !important;
                    border-left: 4px solid #f87171 !important;
                    color: #cbd5e1 !important;
                }
                body.cke_editable table {
                    width: 100% !important;
                    border-collapse: collapse;
                    margin: 14px 0;
                }
                body.cke_editable th, body.cke_editable td {
                    border: 1px solid #cbd5e1;
                    padding: 8px 12px;
                }
                html.dark body.cke_editable th,
                html.dark body.cke_editable td {
                    border-color: #334155 !important;
                    color: #f1f5f9 !important;
                }
            `);

            // Configure CKEditor 4 Toolbar (matching Revamp CMS Investor clean 2-rows layout)
            programCkEditor = CKEDITOR.replace('description', {
                versionCheck: false,
                height: 320,
                font_defaultLabel: 'Inter',
                fontSize_defaultLabel: '13px',
                toolbar: [
                    { name: 'clipboard', items: ['PasteText', 'PasteFromWord', '-', 'RemoveFormat', '-', 'Undo', 'Redo'] },
                    '/',
                    { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
                    { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
                    { name: 'links', items: ['Link', 'Unlink'] },
                    { name: 'insert', items: ['Table', 'SpecialChar'] },
                    { name: 'document', items: ['Source'] }
                ],
                allowedContent: true,
                removePlugins: 'exportpdf'
            });

            // Theme synchronization function for CKEditor 4
            function syncCkEditorTheme() {
                if (!programCkEditor || !programCkEditor.document || !programCkEditor.document.$) return;
                const iframeDoc = programCkEditor.document.$;
                const isDark = document.documentElement.classList.contains('dark');
                if (isDark) {
                    iframeDoc.documentElement.classList.add('dark');
                    iframeDoc.body.classList.add('dark');
                } else {
                    iframeDoc.documentElement.classList.remove('dark');
                    iframeDoc.body.classList.remove('dark');
                }
            }

            programCkEditor.on('instanceReady', syncCkEditorTheme);
            programCkEditor.on('mode', syncCkEditorTheme);

            // Observe dark mode changes
            const observer = new MutationObserver(syncCkEditorTheme);
            observer.observe(document.documentElement, { attributes: true, attributeFilter: ['class'] });

            // Ensure editor data syncs to form textarea on submit
            const form = document.getElementById('programForm');
            if (form) {
                form.addEventListener('submit', function () {
                    if (programCkEditor) {
                        programCkEditor.updateElement();
                    }
                });
            }
        }
    });
</script>

<?= $this->endSection() ?>
