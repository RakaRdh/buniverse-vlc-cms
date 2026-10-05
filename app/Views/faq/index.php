<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold tracking-tight text-foreground">Kelola FAQ (Pertanyaan Umum)</h1>
            <p class="text-xs text-muted-foreground mt-0.5">Atur daftar tanya jawab interaktif yang tampil pada section FAQ di halaman beranda.</p>
        </div>
        <button type="button" onclick="openFaqModal()" 
                class="inline-flex items-center gap-2 rounded-lg bg-[#C41E24] hover:bg-[#A8151A] px-4 py-2 text-xs font-semibold text-white shadow-xs transition-colors self-start sm:self-auto cursor-pointer">
            <i data-lucide="plus" class="size-4"></i>
            <span>Tambah FAQ Baru</span>
        </button>
    </div>

    <!-- FAQ List Table / Cards -->
    <div class="surface-card overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-muted/50 border-b border-border text-muted-foreground uppercase text-[10px] tracking-wider">
                    <tr>
                        <th class="px-4 py-3 font-semibold w-12 text-center">Urutan</th>
                        <th class="px-4 py-3 font-semibold">Pertanyaan</th>
                        <th class="px-4 py-3 font-semibold">Jawaban</th>
                        <th class="px-4 py-3 font-semibold w-24">Status</th>
                        <th class="px-4 py-3 font-semibold w-24 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <?php if (empty($faqs)): ?>
                        <tr>
                            <td colspan="5" class="px-4 py-12 text-center text-muted-foreground">
                                <i data-lucide="help-circle" class="size-8 mx-auto mb-2 opacity-50"></i>
                                <p class="text-xs">Belum ada data FAQ yang terdaftar.</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($faqs as $f): ?>
                            <tr class="hover:bg-muted/20 transition-colors">
                                <td class="px-4 py-3.5 text-center font-mono font-bold text-muted-foreground">
                                    #<?= esc($f['sort_order']) ?>
                                </td>
                                <td class="px-4 py-3.5 font-bold text-foreground">
                                    <?= esc($f['question']) ?>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground max-w-md">
                                    <?= esc($f['answer']) ?>
                                </td>
                                <td class="px-4 py-3.5">
                                    <?php if ($f['is_active'] === '1'): ?>
                                        <span class="inline-flex items-center rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-[10px] font-semibold text-emerald-600 border border-emerald-500/20">Aktif</span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center rounded-full bg-slate-500/10 px-2.5 py-0.5 text-[10px] font-semibold text-slate-500 border border-slate-500/20">Non-Aktif</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3.5 text-right">
                                    <div class="flex items-center justify-end gap-1.5">
                                        <button type="button" onclick='editFaq(<?= json_encode($f) ?>)'
                                                class="p-1 rounded hover:bg-muted text-muted-foreground hover:text-foreground" title="Edit">
                                            <i data-lucide="edit" class="size-3.5"></i>
                                        </button>
                                        <a href="/faq/delete/<?= $f['id'] ?>" onclick="return confirm('Hapus FAQ ini?');"
                                           class="p-1 rounded hover:bg-red-50 dark:hover:bg-red-950/30 text-red-500 hover:text-red-700" title="Hapus">
                                            <i data-lucide="trash-2" class="size-3.5"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Form FAQ -->
<div id="faqModal" class="fixed inset-0 z-50 hidden bg-black/50 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-card border border-border rounded-2xl max-w-lg w-full p-6 shadow-2xl space-y-4">
        <div class="flex items-center justify-between pb-3 border-b border-border">
            <h2 id="faqModalTitle" class="text-sm font-bold text-foreground">Tambah FAQ Baru</h2>
            <button type="button" onclick="closeFaqModal()" class="text-muted-foreground hover:text-foreground">
                <i data-lucide="x" class="size-4"></i>
            </button>
        </div>

        <form action="/faq/save" method="POST" class="space-y-4">
            <?= csrf_field() ?>
            <input type="hidden" id="faqId" name="id" value="">

            <div>
                <label for="faqQuestion" class="block text-xs font-semibold text-foreground mb-1">Pertanyaan <span class="text-red-500">*</span></label>
                <input type="text" id="faqQuestion" name="question" required
                       class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                       placeholder="Contoh: Berapa lama training akan berlangsung?">
            </div>

            <div>
                <label for="faqAnswer" class="block text-xs font-semibold text-foreground mb-1">Jawaban <span class="text-red-500">*</span></label>
                <textarea id="faqAnswer" name="answer" rows="4" required
                          class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]"
                          placeholder="Penjelasan jawaban detail..."></textarea>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div>
                    <label for="faqSort" class="block text-xs font-semibold text-foreground mb-1">Urutan</label>
                    <input type="number" id="faqSort" name="sort_order" value="1"
                           class="w-full px-3 py-2 text-xs rounded-lg border border-border bg-background text-foreground focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                </div>
                <div class="flex items-center pt-5">
                    <label class="inline-flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" id="faqActive" name="is_active" value="1" checked
                               class="rounded border-border text-[#C41E24] focus:ring-[#C41E24]">
                        <span class="text-xs text-foreground font-medium">Status Aktif</span>
                    </label>
                </div>
            </div>

            <div class="pt-3 border-t border-border flex items-center justify-end gap-2">
                <button type="button" onclick="closeFaqModal()" class="px-3.5 py-1.5 text-xs rounded-lg border border-border hover:bg-muted text-foreground">Batal</button>
                <button type="submit" class="px-4 py-1.5 text-xs rounded-lg bg-[#C41E24] hover:bg-[#A8151A] text-white font-semibold shadow-xs">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openFaqModal() {
        document.getElementById('faqId').value = '';
        document.getElementById('faqQuestion').value = '';
        document.getElementById('faqAnswer').value = '';
        document.getElementById('faqSort').value = '1';
        document.getElementById('faqActive').checked = true;
        document.getElementById('faqModalTitle').innerText = 'Tambah FAQ Baru';
        document.getElementById('faqModal').classList.remove('hidden');
    }

    function editFaq(item) {
        document.getElementById('faqId').value = item.id;
        document.getElementById('faqQuestion').value = item.question;
        document.getElementById('faqAnswer').value = item.answer;
        document.getElementById('faqSort').value = item.sort_order;
        document.getElementById('faqActive').checked = (item.is_active === '1');
        document.getElementById('faqModalTitle').innerText = 'Edit FAQ';
        document.getElementById('faqModal').classList.remove('hidden');
    }

    function closeFaqModal() {
        document.getElementById('faqModal').classList.add('hidden');
    }
</script>

<?= $this->endSection() ?>
