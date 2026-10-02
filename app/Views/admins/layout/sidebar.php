<aside 
    x-data="{ collapsed: false }"
    :class="{ 'w-20': collapsed, 'w-64': !collapsed }"
    class="transition-all duration-300 bg-white dark:bg-gray-800 h-full hidden md:block"
>
    <div class="flex items-center justify-between px-4 py-4">
        <h2 x-show="!collapsed" class="text-xl font-bold">TailAdmin</h2>
        <button @click="collapsed = !collapsed" class="md:block focus:outline-none">
            <svg class="w-6 h-6 text-gray-700 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <nav class="space-y-2 mt-4">
        <a href="/admin/dashboard" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7m-9 2v8" /></svg>
            <span x-show="!collapsed" class="ml-3">Dashboard</span>
        </a>
        <a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700 rounded">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0H4m16 0l-1.3 5.2a2 2 0 01-1.9 1.5H6.2a2 2 0 01-1.9-1.5L3 13" /></svg>
            <span x-show="!collapsed" class="ml-3">eCommerce</span>
        </a>
        <!-- Tambahkan menu lain sesuai kebutuhan -->
    </nav>
</aside>