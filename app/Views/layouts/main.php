<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Dashboard') ?> — VLC CMS</title>
    
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
            <!-- Flash Notifications -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="mb-6 flex items-center justify-between rounded-lg border border-emerald-500/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-700 dark:text-emerald-400">
                    <div class="flex items-center gap-2.5 font-medium">
                        <i data-lucide="check-circle-2" class="size-4.5 shrink-0"></i>
                        <span><?= esc(session()->getFlashdata('success')) ?></span>
                    </div>
                    <button class="opacity-70 hover:opacity-100" onclick="this.parentElement.remove()">
                        <i data-lucide="x" class="size-4"></i>
                    </button>
                </div>
            <?php endif; ?>

            <?php if (session()->getFlashdata('error')): ?>
                <div class="mb-6 flex items-center justify-between rounded-lg border border-red-500/30 bg-red-500/10 px-4 py-3 text-sm text-red-700 dark:text-red-400">
                    <div class="flex items-center gap-2.5 font-medium">
                        <i data-lucide="alert-circle" class="size-4.5 shrink-0"></i>
                        <span><?= esc(session()->getFlashdata('error')) ?></span>
                    </div>
                    <button class="opacity-70 hover:opacity-100" onclick="this.parentElement.remove()">
                        <i data-lucide="x" class="size-4"></i>
                    </button>
                </div>
            <?php endif; ?>

            <?= $this->renderSection('content') ?>
        </main>
    </div>
</div>

<script>
    // Initialize Lucide icons
    document.addEventListener("DOMContentLoaded", function() {
        if (window.lucide) {
            lucide.createIcons();
        }
        updateThemeIcons();
    });

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
