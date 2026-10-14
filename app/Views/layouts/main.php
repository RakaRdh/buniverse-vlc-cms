<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Dashboard') ?> | VLC CMS</title>
    
    <!-- Modern Typography: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN (Full utility coverage, zero missing classes) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        brand: {
                            DEFAULT: '#C41E24',
                            hover: '#A8151A',
                            dark: '#8E1418',
                            light: '#FEE2E2',
                        },
                        accent: {
                            DEFAULT: '#F5841F',
                            hover: '#E07212',
                        },
                        card: {
                            DEFAULT: 'var(--card-bg, #FFFFFF)',
                        },
                        border: 'var(--border-color, #E2E8F0)',
                        background: 'var(--bg-color, #F8FAFC)',
                        foreground: 'var(--text-main, #1E293B)',
                        muted: {
                            DEFAULT: 'var(--border-color, #F1F5F9)',
                            foreground: 'var(--text-muted, #64748B)'
                        }
                    }
                }
            }
        }
    </script>

    <!-- CMS Custom Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Icons: Lucide -->
    <script src="https://cdn.jsdelivr.net/npm/lucide@0.468.0/dist/umd/lucide.min.js"></script>

    <!-- Anti-FOUC Theme Script -->
    <script>
        (function() {
            try {
                const storedTheme = localStorage.getItem('vlc_cms_theme');
                if (storedTheme === 'dark') {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            } catch (e) {}
        })();
    </script>
</head>
<body class="bg-slate-50 dark:bg-slate-900 text-slate-800 dark:text-slate-100 font-sans antialiased min-h-screen">

<div class="flex min-h-screen w-full">
    <!-- Desktop Sidebar -->
    <?= $this->include('layouts/sidebar') ?>

    <!-- Mobile Drawer Overlay & Sheet -->
    <div id="mobileDrawerOverlay" class="fixed inset-0 z-50 bg-black/60 backdrop-blur-sm hidden lg:hidden" onclick="toggleMobileNav(false)"></div>
    <div id="mobileDrawerSheet" class="fixed inset-y-0 left-0 z-50 w-[280px] bg-[#C41E24] text-white -translate-x-full transition-transform duration-200 ease-out lg:hidden shadow-2xl">
        <?= $this->include('layouts/sidebar_content', ['isMobile' => true]) ?>
    </div>

    <!-- Main Workspace -->
    <div id="mainWorkspaceWrapper" class="flex min-w-0 flex-1 flex-col transition-[padding] duration-200 ease-out lg:pl-[264px]">
        <!-- Topbar -->
        <?= $this->include('layouts/topbar') ?>

        <!-- Content Area -->
        <main class="mx-auto w-full max-w-[1440px] flex-1 px-4 py-6 sm:px-6 sm:py-8">
            <!-- Flash Notifications (Auto-dismissing) -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="flash-alert mb-6 flex items-center justify-between rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-700 dark:text-emerald-400 transition-all duration-500">
                    <div class="flex items-center gap-2.5 font-medium">
                        <i data-lucide="check-circle-2" class="size-4.5 shrink-0"></i>
                        <span><?= esc(session()->getFlashdata('success')) ?></span>
                    </div>
                    <button type="button" class="opacity-70 hover:opacity-100 p-1 transition-opacity cursor-pointer" onclick="dismissFlashAlert(this.closest('.flash-alert'))">
                        <i data-lucide="x" class="size-4"></i>
                    </button>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="flash-alert mb-6 flex items-center justify-between rounded-lg border border-red-500/30 bg-red-500/10 px-4 py-3 text-sm text-red-700 dark:text-red-400 transition-all duration-500">
                    <div class="flex items-center gap-2.5 font-medium">
                        <i data-lucide="alert-circle" class="size-4.5 shrink-0"></i>
                        <span><?= esc(session()->getFlashdata('error')) ?></span>
                    </div>
                    <button type="button" class="opacity-70 hover:opacity-100 p-1 transition-opacity cursor-pointer" onclick="dismissFlashAlert(this.closest('.flash-alert'))">
                        <i data-lucide="x" class="size-4"></i>
                    </button>
                </div>
            <?php endif; ?>

            <?= $this->renderSection('content') ?>
        </main>
    </div>
</div>

<script>
    function dismissFlashAlert(el) {
        if (!el) return;
        el.style.opacity = '0';
        el.style.transform = 'translateY(-6px)';
        setTimeout(() => {
            if (el.parentNode) el.remove();
        }, 500);
    }

    // Initialize Lucide icons and auto-dismiss alerts
    document.addEventListener("DOMContentLoaded", function() {
        if (window.lucide) {
            lucide.createIcons();
        }
        updateThemeIcons();

        // Auto dismiss flash alerts after 3.5 seconds
        const alerts = document.querySelectorAll('.flash-alert');
        alerts.forEach(alert => {
            setTimeout(() => {
                dismissFlashAlert(alert);
            }, 3500);
        });

        // Global Table Column Sorter (Supports bidirectional asc/desc toggle on click)
        initGlobalTableSorting();
    });

    function initGlobalTableSorting() {
        document.querySelectorAll('table').forEach(table => {
            // Avoid conflict with server-sorted tables like activity-log
            if (table.hasAttribute('data-sortable-table')) return;

            const thead = table.querySelector('thead');
            const tbody = table.querySelector('tbody');
            if (!thead || !tbody) return;

            // Preserve initial rows for resetting back to default state
            table._originalRows = Array.from(tbody.querySelectorAll('tr'));

            const headers = thead.querySelectorAll('th');
            headers.forEach((th, colIdx) => {
                const text = th.textContent.trim().toLowerCase();
                // Skip non-data columns like actions / options
                if (!text || text.includes('aksi') || text.includes('action') || text.includes('update') || text.includes('option')) return;

                th.classList.add('cursor-pointer', 'hover:text-foreground', 'transition-colors', 'select-none', 'group');

                // Render structure with default arrow-up-down Lucide icon if not already structured
                let sortWrapper = th.querySelector('.sort-header-wrapper');
                if (!sortWrapper) {
                    const originalContent = th.innerHTML.trim();
                    const isCentered = th.classList.contains('text-center');
                    const isRight = th.classList.contains('text-right');
                    const justifyClass = isCentered ? 'justify-center' : (isRight ? 'justify-end' : 'justify-start');

                    th.innerHTML = `
                        <div class="sort-header-wrapper flex items-center gap-1.5 ${justifyClass}">
                            <span class="sort-header-label">${originalContent}</span>
                            <span class="sort-icon-container inline-flex items-center">
                                <i data-lucide="arrow-up-down" class="size-3 opacity-30 group-hover:opacity-80 transition-opacity"></i>
                            </span>
                        </div>
                    `;
                    sortWrapper = th.querySelector('.sort-header-wrapper');
                }

                // Attach listener only once per th
                if (th._sortClickListener) {
                    th.removeEventListener('click', th._sortClickListener);
                }

                th._sortClickListener = () => {
                    const currentRows = Array.from(tbody.querySelectorAll('tr'));
                    if (currentRows.length <= 1) return;

                    // If empty state row, don't sort
                    if (currentRows.length === 1 && currentRows[0].querySelector('td[colspan]')) return;

                    // State machine: default (none) -> 'asc' -> 'desc' -> default (none)
                    const currentState = th.getAttribute('data-sort-state') || 'none';
                    let nextState = 'asc';
                    if (currentState === 'asc') {
                        nextState = 'desc';
                    } else if (currentState === 'desc') {
                        nextState = 'none';
                    } else {
                        nextState = 'asc';
                    }

                    // Reset all headers' states & indicators on this table
                    headers.forEach(h => {
                        h.removeAttribute('data-sort-state');
                        const iconContainer = h.querySelector('.sort-icon-container');
                        if (iconContainer) {
                            iconContainer.innerHTML = '<i data-lucide="arrow-up-down" class="size-3 opacity-30 group-hover:opacity-80 transition-opacity"></i>';
                        }
                    });

                    if (nextState === 'none') {
                        // Reset back to original default DOM order
                        if (table._originalRows && table._originalRows.length > 0) {
                            tbody.innerHTML = '';
                            table._originalRows.forEach(r => tbody.appendChild(r));
                        }
                        if (window.lucide) lucide.createIcons();
                        return;
                    }

                    th.setAttribute('data-sort-state', nextState);

                    const iconContainer = th.querySelector('.sort-icon-container');
                    if (iconContainer) {
                        const iconName = (nextState === 'asc') ? 'arrow-up' : 'arrow-down';
                        iconContainer.innerHTML = `<i data-lucide="${iconName}" class="size-3 text-[#C41E24]"></i>`;
                    }
                    if (window.lucide) lucide.createIcons();

                    currentRows.sort((rowA, rowB) => {
                        const cellA = (rowA.children[colIdx]?.innerText || '').trim();
                        const cellB = (rowB.children[colIdx]?.innerText || '').trim();

                        // Check if it is a date/datetime (e.g. 2026-10-02 16:03 or 2026-10-02)
                        const dateA = Date.parse(cellA.replace(/-/g, '/'));
                        const dateB = Date.parse(cellB.replace(/-/g, '/'));
                        const isDateA = !isNaN(dateA) && /^\d{4}[-/]\d{1,2}[-/]\d{1,2}/.test(cellA);
                        const isDateB = !isNaN(dateB) && /^\d{4}[-/]\d{1,2}[-/]\d{1,2}/.test(cellB);

                        let comparison = 0;
                        if (isDateA && isDateB) {
                            comparison = dateA - dateB;
                        } else {
                            // Try extracting pure numbers (ID #123, counts, prices Rp 150.000)
                            const isPureNumeric = /^[\s#Rp$€£]*[0-9.,-]+[\s]*$/.test(cellA) && /^[\s#Rp$€£]*[0-9.,-]+[\s]*$/.test(cellB);
                            if (isPureNumeric) {
                                const numA = parseFloat(cellA.replace(/[^0-9.-]/g, ''));
                                const numB = parseFloat(cellB.replace(/[^0-9.-]/g, ''));
                                if (!isNaN(numA) && !isNaN(numB)) {
                                    comparison = numA - numB;
                                } else {
                                    comparison = cellA.localeCompare(cellB, 'id', { sensitivity: 'base', numeric: true });
                                }
                            } else {
                                comparison = cellA.localeCompare(cellB, 'id', { sensitivity: 'base', numeric: true });
                            }
                        }

                        return (nextState === 'asc') ? comparison : -comparison;
                    });

                    tbody.innerHTML = '';
                    currentRows.forEach(r => tbody.appendChild(r));
                };

                th.addEventListener('click', th._sortClickListener);
            });

            if (window.lucide) lucide.createIcons();
        });
    }
    window.initGlobalTableSorting = initGlobalTableSorting;

    function toggleMobileNav(open) {
        const overlay = document.getElementById('mobileDrawerOverlay');
        const sheet = document.getElementById('mobileDrawerSheet');
        if (open) {
            overlay.classList.remove('hidden');
            sheet.classList.remove('-translate-x-full');
        } else {
            overlay.classList.add('hidden');
            sheet.classList.add('-translate-x-full');
        }
    }

    function toggleSidebarDropdown(button) {
        const parent = button.closest('.sidebar-dropdown-wrapper');
        const menu = parent.querySelector('.dropdown-menu');
        const chevron = parent.querySelector('.dropdown-chevron');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
            chevron.classList.add('rotate-180');
        } else {
            menu.classList.add('hidden');
            chevron.classList.remove('rotate-180');
        }
    }

    function toggleTheme() {
        const isDark = document.documentElement.classList.toggle('dark');
        localStorage.setItem('vlc_cms_theme', isDark ? 'dark' : 'light');
        updateThemeIcons();
    }

    function updateThemeIcons() {
        const isDark = document.documentElement.classList.contains('dark');
        const moon = document.querySelector('.theme-icon-moon');
        const sun = document.querySelector('.theme-icon-sun');
        if (moon && sun) {
            if (isDark) {
                moon.classList.add('hidden');
                sun.classList.remove('hidden');
            } else {
                moon.classList.remove('hidden');
                sun.classList.add('hidden');
            }
        }
    }
</script>

<?= $this->renderSection('scripts') ?>
</body>
</html>
