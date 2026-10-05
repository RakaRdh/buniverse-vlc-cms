<?php
$currentUri = uri_string();
if (empty($currentUri)) $currentUri = 'dashboard';

$routeTitles = [
    'dashboard'    => ['section' => 'Overview', 'page' => 'Dashboard'],
    'programs'     => ['section' => 'Learning', 'page' => 'Daftar Program'],
    'programs/new' => ['section' => 'Learning', 'page' => 'Tambah Program'],
    'enrollments'  => ['section' => 'Learning', 'page' => 'Data Enrollment'],
    'members'      => ['section' => 'Management', 'page' => 'Data Member'],
    'gallery'      => ['section' => 'Content', 'page' => 'Kelola Galeri'],
    'faq'          => ['section' => 'Content', 'page' => 'Kelola FAQ'],
    'profile'      => ['section' => 'Account', 'page' => 'Profil Administrator'],
    'activity-log' => ['section' => 'Security & Audit', 'page' => 'Activity Log'],
];

$crumb = $routeTitles[$currentUri] ?? null;
if (!$crumb) {
    if (str_starts_with($currentUri, 'programs/edit/')) {
        $crumb = ['section' => 'Learning', 'page' => 'Edit Program'];
    } elseif (str_starts_with($currentUri, 'members/detail/')) {
        $crumb = ['section' => 'Management', 'page' => 'Detail Member'];
    } else {
        $crumb = ['section' => 'Overview', 'page' => 'Workspace'];
    }
}

$adminName = session('admin_name') ?? 'Admin';
$adminInitial = strtoupper(substr($adminName, 0, 1));
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
        <div class="flex items-center gap-2.5">
            <!-- Dark / Light theme toggle -->
            <button type="button" onclick="toggleTheme()" id="globalThemeToggleBtn" class="inline-flex size-9 items-center justify-center rounded-lg text-foreground hover:bg-muted transition-colors" title="Ganti Tema">
                <i data-lucide="moon" class="size-4 theme-icon-moon"></i>
                <i data-lucide="sun" class="size-4 theme-icon-sun hidden"></i>
            </button>

            <!-- Admin Profile Icon Button -->
            <a href="/profile" 
               class="inline-flex items-center gap-2 p-1 sm:px-2.5 sm:py-1.5 rounded-lg border border-border bg-background hover:bg-muted transition-colors text-foreground group" 
               title="Profil Administrator">
                <div class="size-6 rounded-full bg-[#C41E24] text-white flex items-center justify-center text-[10px] font-bold shadow-xs">
                    <?= esc($adminInitial) ?>
                </div>
                <span class="hidden sm:inline text-xs font-semibold max-w-[120px] truncate"><?= esc($adminName) ?></span>
            </a>
        </div>
    </div>
</header>
