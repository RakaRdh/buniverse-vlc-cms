<?php
$currentUri = uri_string();
if (empty($currentUri)) $currentUri = 'dashboard';

$routeTitles = [
    'dashboard' => ['section' => 'Overview', 'page' => 'Dashboard'],
    'programs' => ['section' => 'Learning', 'page' => 'Daftar Program'],
    'programs/new' => ['section' => 'Learning', 'page' => 'Tambah Program'],
    'enrollments' => ['section' => 'Learning', 'page' => 'Data Enrollment'],
    'members' => ['section' => 'Management', 'page' => 'Data Member'],
];

$crumb = $routeTitles[$currentUri] ?? null;
if (!$crumb) {
    if (str_starts_with($currentUri, 'programs/edit/')) {
        $crumb = ['section' => 'Learning', 'page' => 'Edit Program'];
    } elseif (str_starts_with($currentUri, 'programs/modules/')) {
        $crumb = ['section' => 'Learning', 'page' => 'Kelola Modul'];
    } else {
        $crumb = ['section' => 'Overview', 'page' => 'Workspace'];
    }
}
?>

<header class="sticky top-0 z-30 border-b border-border bg-card/85 backdrop-blur-md">
    <div class="flex h-16 items-center justify-between gap-3 px-4 sm:px-6">
        <div class="flex items-center gap-3">
            <!-- Mobile Toggle -->
            <button type="button" onclick="toggleMobileNav(true)" class="inline-flex size-10 items-center justify-center rounded-md text-foreground hover:bg-muted lg:hidden" aria-label="Open navigation">
                <i data-lucide="menu" class="size-5"></i>
            </button>

            <!-- Breadcrumbs -->
            <nav aria-label="Breadcrumb">
                <ol class="flex items-center gap-2 text-sm">
                    <li class="hidden text-muted-foreground sm:block"><?= esc($crumb['section']) ?></li>
                    <li class="hidden text-muted-foreground/50 sm:block" aria-hidden="true">/</li>
                    <li class="font-medium text-foreground"><?= esc($crumb['page']) ?></li>
                </ol>
            </nav>
        </div>

        <!-- Right action tools -->
        <div class="flex items-center gap-2">
            <!-- Dark / Light theme toggle -->
            <button type="button" onclick="toggleTheme()" id="globalThemeToggleBtn" class="inline-flex size-9 items-center justify-center rounded-md text-foreground hover:bg-muted transition-colors" title="Ganti Tema">
                <i data-lucide="moon" class="size-4 theme-icon-moon"></i>
                <i data-lucide="sun" class="size-4 theme-icon-sun hidden"></i>
            </button>

            <!-- Frontend Website Quick Link -->
            <a href="http://localhost:8080" target="_blank" class="hidden sm:inline-flex items-center gap-1.5 rounded-md border border-border px-3 py-1.5 text-xs font-medium text-muted-foreground hover:text-foreground hover:bg-muted transition-colors">
                <i data-lucide="external-link" class="size-3.5"></i>
                <span>Lihat Frontend</span>
            </a>
        </div>
    </div>
</header>
