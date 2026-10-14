<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-xl font-bold tracking-tight text-foreground">Data Member & Peserta</h1>
            <p class="text-xs text-muted-foreground mt-0.5">Daftar pengguna terdaftar di sistem VLC. Klik baris untuk melihat rincian profil dan riwayat kelas.</p>
        </div>
    </div>

    <!-- Filter & Search Toolbar -->
    <div class="surface-card p-4">
        <form id="membersFilterForm" method="GET" action="/members" class="flex flex-col sm:flex-row sm:items-center justify-between gap-3" onsubmit="return false;">
            <div id="membersStatusTabs" class="flex items-center gap-2 flex-wrap">
                <a href="/members" data-status="" class="filter-tab-btn rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= empty($status) ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Semua
                </a>
                <a href="/members?status=active" data-status="active" class="filter-tab-btn rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= $status === 'active' ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Aktif
                </a>
                <a href="/members?status=inactive" data-status="inactive" class="filter-tab-btn rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= $status === 'inactive' ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Inactive
                </a>
                <a href="/members?status=banned" data-status="banned" class="filter-tab-btn rounded-md px-3 py-1.5 text-xs font-medium transition-colors <?= $status === 'banned' ? 'bg-[#C41E24] text-white' : 'text-muted-foreground hover:bg-muted' ?>">
                    Banned
                </a>
            </div>

            <div class="relative w-full sm:w-64">
                <input type="text" name="q" id="membersSearchInput" value="<?= esc($keyword ?? '') ?>" placeholder="Cari nama, email, no telp..."
                       class="w-full pl-8 pr-3 py-1.5 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                <i data-lucide="search" class="size-3.5 absolute left-2.5 top-1/2 -translate-y-1/2 text-muted-foreground"></i>
            </div>
        </form>
    </div>

    <!-- Table -->
    <div id="membersTableWrapper" class="surface-card overflow-hidden transition-opacity duration-150">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs">
                <thead class="bg-muted/50 border-b border-border text-muted-foreground uppercase text-[10px] tracking-wider">
                    <tr>
                        <th class="px-4 py-3 font-semibold">ID</th>
                        <th class="px-4 py-3 font-semibold">Nama Lengkap</th>
                        <th class="px-4 py-3 font-semibold">Email</th>
                        <th class="px-4 py-3 font-semibold">No Telepon</th>
                        <th class="px-4 py-3 font-semibold text-center">Kelas Diikuti</th>
                        <th class="px-4 py-3 font-semibold">Status</th>
                        <th class="px-4 py-3 font-semibold">Terdaftar</th>
                        <th class="px-4 py-3 font-semibold text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <?php if (empty($members)): ?>
                        <tr>
                            <td colspan="8" class="px-4 py-12 text-center text-muted-foreground">
                                <i data-lucide="users" class="size-8 mx-auto mb-2 opacity-50"></i>
                                <p class="text-xs">Belum ada akun member yang sesuai filter.</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($members as $m): ?>
                            <tr onclick="window.location='/members/detail/<?= $m['memberID'] ?>'" 
                                class="hover:bg-muted/40 cursor-pointer transition-colors group">
                                <td class="px-4 py-3.5 font-mono text-[11px] text-muted-foreground">
                                    #<?= esc($m['memberID']) ?>
                                </td>
                                <td class="px-4 py-3.5 font-semibold text-foreground group-hover:text-[#C41E24] transition-colors">
                                    <?= esc($m['fullname'] ?? '-') ?>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground">
                                    <?= esc($m['email']) ?>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground whitespace-nowrap">
                                    <?php if (!empty($m['phone'])): ?>
                                        <div class="flex items-center gap-1.5 font-mono text-[11px] text-foreground">
                                            <span><?= esc(\App\Helpers\PhoneHelper::formatDisplay($m['phone'])) ?></span>
                                            <?php $waUrl = \App\Helpers\PhoneHelper::waUrl($m['phone']); ?>
                                            <?php if (!empty($waUrl)): ?>
                                                <a href="<?= esc($waUrl) ?>" target="_blank" rel="noopener noreferrer" 
                                                   onclick="event.stopPropagation();"
                                                   class="text-emerald-600 hover:text-emerald-700 p-0.5 rounded transition-transform hover:scale-110" title="Hubungi via WhatsApp">
                                                    <i data-lucide="message-circle" class="size-3.5"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    <?php else: ?>
                                        <span class="text-muted-foreground">-</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3.5 text-center font-medium">
                                    <span class="inline-flex items-center gap-1 rounded-md bg-muted px-2 py-0.5">
                                        <i data-lucide="book-open" class="size-3 text-muted-foreground"></i>
                                        <span><?= $m['enrolled_count'] ?></span>
                                    </span>
                                </td>
                                <td class="px-4 py-3.5">
                                    <?php if ($m['status'] === 'active'): ?>
                                        <span class="inline-flex items-center rounded-full bg-emerald-500/10 px-2.5 py-0.5 text-[10px] font-medium text-emerald-600 dark:text-emerald-400 capitalize">
                                            <?= esc($m['status']) ?>
                                        </span>
                                    <?php elseif ($m['status'] === 'banned'): ?>
                                        <span class="inline-flex items-center rounded-full bg-red-500/10 px-2.5 py-0.5 text-[10px] font-medium text-red-600 capitalize">
                                            Banned
                                        </span>
                                    <?php else: ?>
                                        <span class="inline-flex items-center rounded-full bg-amber-500/10 px-2.5 py-0.5 text-[10px] font-medium text-amber-600 capitalize">
                                            <?= esc($m['status'] ?? 'inactive') ?>
                                        </span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3.5 text-muted-foreground">
                                    <?= esc(substr($m['signupdate'] ?? '-', 0, 10)) ?>
                                </td>
                                <td class="px-4 py-3.5 text-right">
                                    <span class="inline-flex items-center gap-1 text-[11px] font-semibold text-[#C41E24] group-hover:translate-x-0.5 transition-transform">
                                        <span>Detail</span>
                                        <i data-lucide="chevron-right" class="size-3.5"></i>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    (function initMembersAjaxFilter() {
        const tabsContainer = document.getElementById('membersStatusTabs');
        const searchInput = document.getElementById('membersSearchInput');
        const tableWrapper = document.getElementById('membersTableWrapper');

        if (!tabsContainer || !searchInput || !tableWrapper) return;

        let currentStatus = '<?= esc($status ?? '') ?>';
        let debounceTimer = null;
        let activeAbortCtrl = null;

        function updateTabStyles(activeStatus) {
            tabsContainer.querySelectorAll('.filter-tab-btn').forEach(btn => {
                const stat = btn.getAttribute('data-status');
                if (stat === activeStatus) {
                    btn.className = 'filter-tab-btn rounded-md px-3 py-1.5 text-xs font-medium transition-colors bg-[#C41E24] text-white';
                } else {
                    btn.className = 'filter-tab-btn rounded-md px-3 py-1.5 text-xs font-medium transition-colors text-muted-foreground hover:bg-muted';
                }
            });
        }

        function fetchFilteredMembers() {
            const kw = searchInput.value.trim();
            const params = new URLSearchParams();
            if (currentStatus) params.set('status', currentStatus);
            if (kw) params.set('q', kw);

            const newUrl = '/members' + (params.toString() ? '?' + params.toString() : '');
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
                const newTable = doc.getElementById('membersTableWrapper');
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

        tabsContainer.addEventListener('click', function(e) {
            const tabBtn = e.target.closest('.filter-tab-btn');
            if (tabBtn) {
                e.preventDefault();
                currentStatus = tabBtn.getAttribute('data-status') || '';
                updateTabStyles(currentStatus);
                fetchFilteredMembers();
            }
        });

        searchInput.addEventListener('input', function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(fetchFilteredMembers, 300);
        });
    })();
</script>

<?= $this->endSection() ?>
