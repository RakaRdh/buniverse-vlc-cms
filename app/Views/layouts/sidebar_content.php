<?php
$currentUri = uri_string();
if (empty($currentUri)) $currentUri = 'dashboard';

$adminRole = session('admin_role') ?? 'admin';

$navGroups = [
    [
        'label' => 'Overview',
        'items' => [
            ['label' => 'Dashboard', 'to' => 'dashboard', 'icon' => 'layout-dashboard', 'type' => 'link']
        ]
    ],
    [
        'label' => 'Learning',
        'items' => [
            [
                'label' => 'Programs',
                'type' => 'dropdown',
                'icon' => 'book-open',
                'children' => [
                    ['label' => 'Daftar Program', 'to' => 'programs'],
                    ['label' => 'Tambah Program', 'to' => 'programs/new']
                ]
            ],
            ['label' => 'Enrollments', 'to' => 'enrollments', 'icon' => 'clipboard-list', 'type' => 'link']
        ]
    ],
    [
        'label' => 'Management',
        'items' => [
            ['label' => 'Members', 'to' => 'members', 'icon' => 'users', 'type' => 'link']
        ]
    ],
    [
        'label' => 'Content & Media',
        'items' => [
            ['label' => 'Gallery', 'to' => 'gallery', 'icon' => 'image', 'type' => 'link'],
            ['label' => 'FAQ', 'to' => 'faq', 'icon' => 'help-circle', 'type' => 'link']
        ]
    ]
];

// Activity Log is only accessible by superadmin
if ($adminRole === 'superadmin') {
    $navGroups[] = [
        'label' => 'Security & Audit',
        'items' => [
            ['label' => 'Activity Log', 'to' => 'activity-log', 'icon' => 'shield-alert', 'type' => 'link']
        ]
    ];
}
?>

<div class="flex h-screen flex-col justify-between bg-[#C41E24] text-white select-none overflow-hidden">
    <!-- Brand Header -->
    <div class="flex h-16 shrink-0 items-center gap-3 px-4 border-b border-white/15">
        <a href="/dashboard" class="flex items-center gap-3 min-w-0">
            <img src="/img/logo-vlc-white.webp" alt="VLC Logo" class="h-8 w-auto object-contain shrink-0">
            <div class="min-w-0 brand-desc">
                <span class="block truncate text-sm font-bold tracking-tight text-white">
                    DATASATU <span class="text-amber-200">VLC</span>
                </span>
                <span class="block text-[10px] tracking-[0.16em] text-white/80 uppercase font-medium">Learning Center CMS</span>
            </div>
        </a>
    </div>

    <!-- Navigation List -->
    <nav id="sidebarMainNavigation" aria-label="Main navigation" class="flex-1 overflow-y-auto overflow-x-hidden px-4 py-4 space-y-4 overscroll-contain custom-sidebar-scroll">
        <?php foreach ($navGroups as $group): ?>
            <div>
                <p class="group-label mb-1.5 px-3 text-[10px] font-bold tracking-[0.14em] text-white/60 uppercase">
                    <?= esc($group['label']) ?>
                </p>

                <ul class="space-y-1">
                    <?php foreach ($group['items'] as $item): ?>
                        <?php if (($item['type'] ?? 'link') === 'dropdown'): ?>
                            <?php
                                $isChildActive = false;
                                foreach ($item['children'] as $child) {
                                    if ($currentUri === $child['to'] || ($child['to'] === 'programs' && (str_starts_with($currentUri, 'programs/edit/') || str_starts_with($currentUri, 'programs/modules/')))) {
                                        $isChildActive = true;
                                        break;
                                    }
                                }
                            ?>
                            <li class="sidebar-dropdown-wrapper">
                                <button type="button" 
                                        onclick="toggleSidebarDropdown(this)"
                                        class="nav-item-link group relative flex w-full items-center justify-between gap-3 rounded-lg px-3 py-2.5 text-xs transition-colors duration-150 <?= $isChildActive ? 'bg-white/20 font-bold text-white' : 'text-white/85 hover:bg-white/15 hover:text-white' ?>">
                                    <div class="flex items-center gap-2.5 min-w-0">
                                        <i data-lucide="<?= esc($item['icon']) ?>" class="size-4 shrink-0 <?= $isChildActive ? 'text-amber-200' : 'text-white/80 group-hover:text-white' ?>"></i>
                                        <span class="nav-label truncate"><?= esc($item['label']) ?></span>
                                    </div>
                                    <i data-lucide="chevron-down" class="dropdown-chevron size-3.5 shrink-0 transition-transform duration-200 text-white/70 <?= $isChildActive ? 'rotate-180' : '' ?>"></i>
                                </button>
                                <ul class="dropdown-menu mt-1 space-y-0.5 pl-7 <?= $isChildActive ? 'block' : 'hidden' ?>">
                                    <?php foreach ($item['children'] as $child): ?>
                                        <?php 
                                            $isActive = false;
                                            if ($currentUri === $child['to']) {
                                                $isActive = true;
                                            } elseif ($child['to'] === 'programs' && (str_starts_with($currentUri, 'programs/edit/') || str_starts_with($currentUri, 'programs/modules/'))) {
                                                $isActive = true;
                                            }
                                        ?>
                                        <li>
                                            <a href="/<?= esc($child['to']) ?>"
                                               class="block rounded-md px-2.5 py-1.5 text-[11px] transition-colors duration-150 <?= $isActive ? 'bg-white font-bold text-[#C41E24] shadow-xs' : 'text-white/80 hover:bg-white/15 hover:text-white' ?>">
                                                <?= esc($child['label']) ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        <?php else: ?>
                            <?php 
                                $isActive = ($currentUri === $item['to'] || str_starts_with($currentUri, $item['to'] . '/'));
                            ?>
                            <li>
                                <a href="/<?= esc($item['to']) ?>"
                                   class="nav-item-link group relative flex items-center gap-2.5 rounded-lg px-3 py-2.5 text-xs transition-colors duration-150 <?= $isActive ? 'bg-white font-bold text-[#C41E24] shadow-xs' : 'text-white/85 hover:bg-white/15 hover:text-white' ?>">
                                    <i data-lucide="<?= esc($item['icon']) ?>" class="size-4 shrink-0 <?= $isActive ? 'text-[#C41E24]' : 'text-white/80 group-hover:text-white' ?>"></i>
                                    <span class="nav-label truncate"><?= esc($item['label']) ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </nav>

    <!-- Bottom User Section -->
    <div class="shrink-0 border-t border-white/15 p-3">
        <div class="flex items-center justify-between gap-2 rounded-lg bg-black/15 p-2.5 border border-white/10">
            <a href="/profile" class="flex items-center gap-2.5 min-w-0 flex-1 hover:opacity-90 transition-opacity" title="Lihat Profil Admin">
                <div class="size-8 rounded-full bg-white/20 flex items-center justify-center text-xs font-bold text-white shrink-0 border border-white/30">
                    <?= esc(substr(session('admin_name') ?? 'Admin', 0, 1)) ?>
                </div>
                <div class="min-w-0 brand-desc">
                    <p class="truncate text-xs font-semibold text-white"><?= esc(session('admin_name') ?? 'Admin VLC') ?></p>
                    <p class="truncate text-[10px] text-white/70 capitalize"><?= esc(session('admin_role') ?? 'Superadmin') ?></p>
                </div>
            </a>
            <a href="/logout" onclick="return confirm('Apakah Anda yakin ingin logout?');" class="text-white/70 hover:text-white p-1.5 rounded-md hover:bg-white/10 transition-colors" title="Logout">
                <i data-lucide="log-out" class="size-4"></i>
            </a>
        </div>
    </div>
</div>
