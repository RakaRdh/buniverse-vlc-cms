<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="space-y-6">
    <!-- Header -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <div class="flex items-center gap-2">
                <h1 class="text-xl font-bold tracking-tight text-foreground">Audit Activity Log</h1>
                <span class="inline-flex items-center gap-1 rounded-md bg-amber-500/10 px-2 py-0.5 text-[10px] font-bold text-amber-600 border border-amber-500/20 uppercase tracking-wider">
                    <i data-lucide="shield-check" class="size-3"></i>
                    <span>Superadmin Only</span>
                </span>
            </div>
            <p class="text-xs text-muted-foreground mt-0.5">Catatan jejak audit seluruh aktivitas CRUD dan mutasi data oleh administrator sistem VLC.</p>
        </div>
    </div>

    <!-- Filter Toolbar -->
    <div class="surface-card p-4">
        <form id="activityFilterForm" method="GET" action="/activity-log" class="grid grid-cols-1 sm:grid-cols-12 gap-3" onsubmit="return false;">
            <!-- Filter Modul -->
            <div class="sm:col-span-3">
                <select name="module" id="filterModule"
                        class="w-full text-xs rounded-md border border-border bg-background px-3 py-1.5 focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    <option value="">-- Semua Modul --</option>
                    <option value="enrollments" <?= ($module === 'enrollments') ? 'selected' : '' ?>>Enrollments</option>
                    <option value="programs" <?= ($module === 'programs') ? 'selected' : '' ?>>Programs</option>
                    <option value="members" <?= ($module === 'members') ? 'selected' : '' ?>>Members</option>
                    <option value="auth" <?= ($module === 'auth') ? 'selected' : '' ?>>Auth / Session</option>
                    <option value="profile" <?= ($module === 'profile') ? 'selected' : '' ?>>Admin Profile</option>
                </select>
            </div>

            <!-- Filter Aksi -->
            <div class="sm:col-span-3">
                <select name="action" id="filterAction"
                        class="w-full text-xs rounded-md border border-border bg-background px-3 py-1.5 focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                    <option value="">-- Semua Aksi (CRUD) --</option>
                    <option value="STATUS_CHANGE" <?= ($action === 'STATUS_CHANGE') ? 'selected' : '' ?>>STATUS_CHANGE</option>
                    <option value="INSERT" <?= ($action === 'INSERT') ? 'selected' : '' ?>>INSERT</option>
                    <option value="UPDATE" <?= ($action === 'UPDATE') ? 'selected' : '' ?>>UPDATE</option>
                    <option value="DELETE" <?= ($action === 'DELETE') ? 'selected' : '' ?>>DELETE</option>
                    <option value="LOGIN" <?= ($action === 'LOGIN') ? 'selected' : '' ?>>LOGIN</option>
                    <option value="PASSWORD_CHANGE" <?= ($action === 'PASSWORD_CHANGE') ? 'selected' : '' ?>>PASSWORD_CHANGE</option>
                </select>
            </div>

            <!-- Filter Jumlah Per Halaman (Posisi Antara Filter Aksi & Search) -->
            <div class="sm:col-span-2">
                <select name="per_page" id="filterPerPage"
                        class="w-full text-xs rounded-md border border-border bg-background px-3 py-1.5 focus:outline-none focus:ring-1 focus:ring-[#C41E24] font-medium"
                        title="Tampilkan per halaman">
                    <option value="50" <?= ($perPage === 50) ? 'selected' : '' ?>>50 / hal</option>
                    <option value="100" <?= ($perPage === 100) ? 'selected' : '' ?>>100 / hal</option>
                    <option value="150" <?= ($perPage === 150) ? 'selected' : '' ?>>150 / hal</option>
                    <option value="200" <?= ($perPage === 200) ? 'selected' : '' ?>>200 / hal</option>
                </select>
            </div>

            <!-- Keyword Search -->
            <div class="sm:col-span-4 relative">
                <input type="text" name="q" id="filterKeyword" value="<?= esc($keyword ?? '') ?>" placeholder="Cari keterangan, admin, member..."
                       class="w-full pl-8 pr-3 py-1.5 text-xs rounded-md border border-border bg-background focus:outline-none focus:ring-1 focus:ring-[#C41E24]">
                <i data-lucide="search" class="size-3.5 absolute left-2.5 top-1/2 -translate-y-1/2 text-muted-foreground"></i>
            </div>
        </form>
    </div>

    <!-- Table -->
    <div id="activityTableWrapper" class="surface-card overflow-hidden transition-opacity duration-150">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs" data-sortable-table>
                <thead class="bg-muted/50 border-b border-border text-muted-foreground uppercase text-[10px] tracking-wider select-none">
                    <tr>
                        <th class="px-4 py-3 font-semibold cursor-pointer hover:text-foreground transition-colors group" data-sort-key="created_at">
                            <div class="flex items-center gap-1.5">
                                <span>Waktu</span>
                                <?php if ($sortCol === 'created_at' && in_array($sortDir, ['asc', 'desc'])): ?>
                                    <i data-lucide="<?= ($sortDir === 'asc') ? 'arrow-up' : 'arrow-down' ?>" class="size-3 text-[#C41E24]"></i>
                                <?php else: ?>
                                    <i data-lucide="arrow-up-down" class="size-3 opacity-30 group-hover:opacity-80"></i>
                                <?php endif; ?>
                            </div>
                        </th>
                        <th class="px-4 py-3 font-semibold cursor-pointer hover:text-foreground transition-colors group" data-sort-key="admin_name">
                            <div class="flex items-center gap-1.5">
                                <span>Administrator</span>
                                <?php if ($sortCol === 'admin_name' && in_array($sortDir, ['asc', 'desc'])): ?>
                                    <i data-lucide="<?= ($sortDir === 'asc') ? 'arrow-up' : 'arrow-down' ?>" class="size-3 text-[#C41E24]"></i>
                                <?php else: ?>
                                    <i data-lucide="arrow-up-down" class="size-3 opacity-30 group-hover:opacity-80"></i>
                                <?php endif; ?>
                            </div>
                        </th>
                        <th class="px-4 py-3 font-semibold cursor-pointer hover:text-foreground transition-colors group" data-sort-key="action">
                            <div class="flex items-center gap-1.5">
                                <span>Aksi</span>
                                <?php if ($sortCol === 'action' && in_array($sortDir, ['asc', 'desc'])): ?>
                                    <i data-lucide="<?= ($sortDir === 'asc') ? 'arrow-up' : 'arrow-down' ?>" class="size-3 text-[#C41E24]"></i>
                                <?php else: ?>
                                    <i data-lucide="arrow-up-down" class="size-3 opacity-30 group-hover:opacity-80"></i>
                                <?php endif; ?>
                            </div>
                        </th>
                        <th class="px-4 py-3 font-semibold cursor-pointer hover:text-foreground transition-colors group" data-sort-key="module">
                            <div class="flex items-center gap-1.5">
                                <span>Modul</span>
                                <?php if ($sortCol === 'module' && in_array($sortDir, ['asc', 'desc'])): ?>
                                    <i data-lucide="<?= ($sortDir === 'asc') ? 'arrow-up' : 'arrow-down' ?>" class="size-3 text-[#C41E24]"></i>
                                <?php else: ?>
                                    <i data-lucide="arrow-up-down" class="size-3 opacity-30 group-hover:opacity-80"></i>
                                <?php endif; ?>
                            </div>
                        </th>
                        <th class="px-4 py-3 font-semibold cursor-pointer hover:text-foreground transition-colors group" data-sort-key="target_member_name">
                            <div class="flex items-center gap-1.5">
                                <span>Member Terkait</span>
                                <?php if ($sortCol === 'target_member_name' && in_array($sortDir, ['asc', 'desc'])): ?>
                                    <i data-lucide="<?= ($sortDir === 'asc') ? 'arrow-up' : 'arrow-down' ?>" class="size-3 text-[#C41E24]"></i>
                                <?php else: ?>
                                    <i data-lucide="arrow-up-down" class="size-3 opacity-30 group-hover:opacity-80"></i>
                                <?php endif; ?>
                            </div>
                        </th>
                        <th class="px-4 py-3 font-semibold">Keterangan Detail</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-border">
                    <?php if (empty($logs)): ?>
                        <tr>
                            <td colspan="6" class="px-4 py-12 text-center text-muted-foreground">
                                <i data-lucide="history" class="size-8 mx-auto mb-2 opacity-50"></i>
                                <p class="text-xs">Belum ada catatan aktivitas yang sesuai filter.</p>
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($logs as $l): ?>
                            <tr class="hover:bg-muted/20 transition-colors">
                                <td class="px-4 py-3.5 font-mono text-[11px] text-muted-foreground whitespace-nowrap">
                                    <?= esc($l['created_at']) ?>
                                </td>
                                <td class="px-4 py-3.5 font-semibold text-foreground whitespace-nowrap">
                                    <div class="flex items-center gap-1.5">
                                        <i data-lucide="user-check" class="size-3.5 text-[#C41E24]"></i>
                                        <span><?= esc($l['admin_name']) ?></span>
                                    </div>
                                </td>
                                <td class="px-4 py-3.5">
                                    <?php
                                        $actionBadge = match(strtoupper($l['action'])) {
                                            'DELETE'          => 'bg-red-500/10 text-red-600 border border-red-500/20',
                                            'STATUS_CHANGE'   => 'bg-amber-500/10 text-amber-600 border border-amber-500/20',
                                            'INSERT'          => 'bg-emerald-500/10 text-emerald-600 border border-emerald-500/20',
                                            'PASSWORD_CHANGE' => 'bg-purple-500/10 text-purple-600 border border-purple-500/20',
                                            'LOGIN', 'LOGOUT' => 'bg-slate-500/10 text-slate-600 dark:text-slate-400 border border-slate-500/20',
                                            default           => 'bg-blue-500/10 text-blue-600 border border-blue-500/20'
                                        };
                                    ?>
                                    <span class="inline-flex items-center rounded-full px-2 py-0.5 text-[10px] font-mono font-semibold <?= $actionBadge ?>">
                                        <?= esc($l['action']) ?>
                                    </span>
                                </td>
                                <td class="px-4 py-3.5 capitalize font-medium text-foreground">
                                    <?= esc($l['module']) ?>
                                </td>
                                <td class="px-4 py-3.5 text-foreground">
                                    <?php if (!empty($l['target_member_name'])): ?>
                                        <span class="font-medium"><?= esc($l['target_member_name']) ?></span>
                                        <?php if (!empty($l['target_member_id'])): ?>
                                            <span class="text-muted-foreground font-mono text-[10px]">(#<?= esc($l['target_member_id']) ?>)</span>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <span class="text-muted-foreground">-</span>
                                    <?php endif; ?>
                                </td>
                                <td class="px-4 py-3.5 text-foreground max-w-md">
                                    <?= esc($l['description']) ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination & Summary Bar -->
        <?php if (!empty($pager) && $pager->getPageCount() > 1): ?>
            <?php 
                $currentPageNum = $pager->getCurrentPage();
                $pageCount = $pager->getPageCount();
            ?>
            <div class="px-4 py-3 border-t border-border flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 text-xs text-muted-foreground">
                <div class="flex items-center gap-2">
                    <span>Menampilkan <strong><?= count($logs) ?></strong> data log</span>
                    <span>&bull;</span>
                    <span>Halaman <strong><?= $currentPageNum ?></strong> dari <strong><?= $pageCount ?></strong></span>
                </div>
                <div class="flex items-center gap-1.5 flex-wrap">
                    <?php if ($currentPageNum > 1): ?>
                        <button type="button" onclick="goToActivityPage(1)" class="px-2.5 py-1 rounded border border-border bg-background hover:bg-muted font-medium transition-colors" title="Halaman Pertama">&laquo;</button>
                        <button type="button" onclick="goToActivityPage(<?= $currentPageNum - 1 ?>)" class="px-2.5 py-1 rounded border border-border bg-background hover:bg-muted font-medium transition-colors">&lsaquo; Prev</button>
                    <?php endif; ?>

                    <span class="px-3 py-1 rounded bg-[#C41E24] text-white font-bold text-xs"><?= $currentPageNum ?></span>

                    <?php if ($currentPageNum < $pageCount): ?>
                        <button type="button" onclick="goToActivityPage(<?= $currentPageNum + 1 ?>)" class="px-2.5 py-1 rounded border border-border bg-background hover:bg-muted font-medium transition-colors">Next &rsaquo;</button>
                        <button type="button" onclick="goToActivityPage(<?= $pageCount ?>)" class="px-2.5 py-1 rounded border border-border bg-background hover:bg-muted font-medium transition-colors" title="Halaman Terakhir">&raquo;</button>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
    (function initActivityLogAjaxFilter() {
        const moduleSelect = document.getElementById('filterModule');
        const actionSelect = document.getElementById('filterAction');
        const perPageSelect = document.getElementById('filterPerPage');
        const keywordInput = document.getElementById('filterKeyword');
        const tableWrapper = document.getElementById('activityTableWrapper');

        if (!moduleSelect || !actionSelect || !keywordInput || !tableWrapper) return;

        let debounceTimer = null;
        let activeAbortCtrl = null;
        let currentSortCol = '<?= esc($sortCol ?? 'id') ?>';
        let currentSortDir = '<?= esc($sortDir ?? 'desc') ?>';
        let currentPage = <?= (int) ($pager ? $pager->getCurrentPage() : 1) ?>;

        window.goToActivityPage = function(p) {
            currentPage = p;
            fetchFilteredLogs();
        };

        function fetchFilteredLogs() {
            const mod = moduleSelect.value;
            const act = actionSelect.value;
            const perPage = perPageSelect ? perPageSelect.value : 50;
            const kw = keywordInput.value.trim();

            const params = new URLSearchParams();
            if (mod) params.set('module', mod);
            if (act) params.set('action', act);
            if (perPage) params.set('per_page', perPage);
            if (kw) params.set('q', kw);
            if (currentSortCol) params.set('sort', currentSortCol);
            if (currentSortDir) params.set('dir', currentSortDir);
            if (currentPage > 1) params.set('page', currentPage);

            const newUrl = '/activity-log' + (params.toString() ? '?' + params.toString() : '');
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
                const newTable = doc.getElementById('activityTableWrapper');
                if (newTable) {
                    tableWrapper.innerHTML = newTable.innerHTML;
                }
                tableWrapper.style.opacity = '1';
                if (window.lucide) {
                    lucide.createIcons();
                }
                bindHeaderSortClicks();
            })
            .catch(err => {
                if (err.name !== 'AbortError') {
                    console.error('Filter fetch error:', err);
                    tableWrapper.style.opacity = '1';
                }
            });
        }

        function bindHeaderSortClicks() {
            const sortHeaders = tableWrapper.querySelectorAll('th[data-sort-key]');
            sortHeaders.forEach(th => {
                th.addEventListener('click', function() {
                    const key = this.getAttribute('data-sort-key');
                    if (currentSortCol === key) {
                        // Cycle: asc -> desc -> default (reset to id desc)
                        if (currentSortDir === 'asc') {
                            currentSortDir = 'desc';
                        } else if (currentSortDir === 'desc') {
                            currentSortCol = '';
                            currentSortDir = '';
                        } else {
                            currentSortDir = 'asc';
                        }
                    } else {
                        // First click on this column -> asc
                        currentSortCol = key;
                        currentSortDir = 'asc';
                    }
                    currentPage = 1; // Reset to page 1 on sort change
                    fetchFilteredLogs();
                });
            });
        }

        moduleSelect.addEventListener('change', () => { currentPage = 1; fetchFilteredLogs(); });
        actionSelect.addEventListener('change', () => { currentPage = 1; fetchFilteredLogs(); });
        if (perPageSelect) {
            perPageSelect.addEventListener('change', () => { currentPage = 1; fetchFilteredLogs(); });
        }

        keywordInput.addEventListener('input', function() {
            clearTimeout(debounceTimer);
            debounceTimer = setTimeout(() => {
                currentPage = 1;
                fetchFilteredLogs();
            }, 300);
        });

        bindHeaderSortClicks();
    })();
</script>

<?= $this->endSection() ?>
