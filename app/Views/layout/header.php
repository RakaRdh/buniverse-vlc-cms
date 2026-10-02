<?php $user = session()->get('auth_user'); ?>
<header class="w-full border-b border-gray-100 bg-white sticky top-0 z-50 shadow-sm">
    <div class="max-w-[1440px] mx-auto flex items-center justify-between px-4 lg:px-10 h-[72px]">
        <a href="/" class="flex items-center gap-2 shrink-0">
            <!-- <span class="font-extrabold text-lg lg:text-xl tracking-tight">
                <span class="text-gray-900">DATA</span><span class="text-brand">SATU.COM</span>
            </span>
            <span class="hidden sm:flex flex-col leading-none border-l border-gray-300 pl-2 ml-1">
                <span class="text-[11px] font-semibold text-gray-800">Vocational</span>
                <span class="text-[9px] text-brand font-semibold tracking-wide">LEARNING CENTER</span>
            </span> -->
            <img src="/img/logo-vocational.webp" alt="Logo Vocational Learning Center" class="h-[42px] object-cover object-center" />
        </a>

        <nav class="hidden lg:flex items-center gap-8 text-sm font-medium text-gray-700">
            <a href="/" class="hover:text-brand transition">Home</a>
            <a href="/about_us" class="hover:text-brand transition">About</a>
            <a href="/product" class="hover:text-brand transition">Product</a>
            <a href="/faq" class="hover:text-brand transition">FaQ</a>
        </nav>

        <div class="flex items-center gap-4 text-sm font-medium">
            <?php if ($user): ?>
                <span class="hidden sm:inline text-gray-700">Hi, <?= esc($user['name']) ?></span>
                <a href="/logout" class="text-brand hover:text-brand-dark">Logout</a>
            <?php else: ?>
                <a href="/login" class="text-gray-800 hover:text-brand">Login</a>
                <span class="text-gray-300">|</span>
                <a href="/register" class="text-gray-800 hover:text-brand">Sign In</a>
            <?php endif; ?>
        </div>
    </div>
</header>