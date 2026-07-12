<header
    class="w-full sticky top-0 z-10 bg-white border-b border-gray-200 datk:border-gray-700 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="h-16 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <!-- Mobile menu button (visible on small screens) -->
                <label for="nav-toggle"
                    class="cursor-pointer p-2 lg:hidden inline-flex items-center justify-center rounded-md hover:bg-gray-100 dark:hover:bg-gray-700"
                    title="Toggle menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>


                @isset($header)
                    <div class="text-lg font-semibold dark:text-gray-100">{{ $header }}</div>
                @endisset
                {{-- <div
                    class="hidden md:flex items-center text-sm text-gray-500 bg-gray-50 px-3 py-1 rounded ml-3 dark:bg-gray-700">
                    Insights &amp; metrics
                </div> --}}
            </div>

            <div class="flex items-center gap-3">
                <div class="hidden sm:block">
                    <input type="search" placeholder="Search..."
                        class="px-3 py-2 border rounded-md bg-gray-50 text-sm focus:outline-none focus:ring-1 focus:ring-indigo-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-300" />
                </div>

                <button class="p-2 rounded-full hover:bg-gray-100" title="Notifications">🔔</button>

                <div class="flex items-center gap-2">
                    <img src="https://ui-avatars.com/api/?name=Admin&background=6366F1&color=fff" alt="avatar"
                        class="h-8 w-8 rounded-full" />
                    <div class="hidden sm:block text-sm">
                        <div class="font-medium dark:text-gray-100">Admin User</div>
                        <div class="text-xs text-gray-500">Administrator</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
