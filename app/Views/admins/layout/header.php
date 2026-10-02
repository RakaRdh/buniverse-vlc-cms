<header class="h-16 flex items-center justify-between px-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
  <div class="flex items-center space-x-4">
      <!-- Burger -->
      <button id="burger" class="lg:hidden p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
          <svg class="w-6 h-6 text-gray-700 dark:text-gray-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
      </button>
      <!-- Search -->
      <div class="relative text-gray-600">
          <input type="search" placeholder="Search…" class="pl-10 pr-4 py-2 rounded-md border border-gray-300 dark:border-gray-600 bg-gray-50 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary">
          <svg class="absolute left-3 top-1/2 transform -translate-y-1/2 w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M10 18a8 8 0 110-16 8 8 0 010 16z"/></svg>
      </div>
  </div>
  <!-- Right controls -->
  <div class="flex items-center space-x-4">
      <!-- Dark mode switch -->
      <button id="darkSwitch" class="p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none" aria-label="Toggle dark mode">
        <svg id="sunIcon" class="w-6 h-6 hidden dark:block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 2v2m6.364 1.636l-1.414 1.414M20 12h-2M17.364 18.364l-1.414-1.414M12 20v-2M6.636 18.364l1.414-1.414M4 12h2M6.636 5.636l1.414 1.414M12 8a4 4 0 100 8 4 4 0 000-8z"/></svg>
        <svg id="moonIcon" class="w-6 h-6 dark:hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12.79A2 2 0 1120 15c-.28 0-.55-.04-.81-.11a8 8 0 11-8.18-8.18A4 4 0 0020 9c0 .34-.04.67-.11.99"/></svg>
      </button>

      <!-- Notification Icon (placeholder) -->
      <button class="relative p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
        <svg class="w-6 h-6 text-gray-700 dark:text-gray-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405C18.79 14.79 18 13.386 18 12V8a6 6 0 10-12 0v4c0 1.386-.79 2.79-1.595 3.595L3 17h5m4 0v1a3 3 0 11-6 0v-1m6 0H9"/></svg>
      </button>

      <!-- Profile dropdown -->
      <div class="relative">
        <button id="profileBtn" class="flex items-center space-x-2 focus:outline-none">
            <img src="https://i.pravatar.cc/40?img=3" alt="User avatar" class="w-8 h-8 rounded-full">
            <span class="hidden md:block font-medium">Admin</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div id="profileMenu" class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md shadow-lg py-2 hidden">
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Profile</a>
            <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-700">Settings</a>
            <div class="border-t border-gray-200 dark:border-gray-700 my-2"></div>
            <a href="<?= site_url('logout'); ?>" class="block px-4 py-2 text-sm text-red-600 dark:text-red-400 hover:bg-gray-100 dark:hover:bg-gray-700">Logout</a>
        </div>
      </div>
  </div>
</header>