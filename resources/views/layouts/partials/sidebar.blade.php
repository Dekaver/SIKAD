<aside
    class="sidebar fixed left-0 top-0 bottom-0 z-30 flex flex-col bg-white border-r border-gray-200 p-4 shadow-md overflow-auto dark:bg-gray-800 dark:border-gray-700">
    <div class="flex items-center gap-3 mb-6 border-b-2 border-gray-100 dark:border-gray-700">
        <div
            class="h-10 w-10 bg-indigo-600 rounded flex items-center justify-center text-white font-bold dark:bg-indigo-500 dark:text-gray-800">
            SIA
        </div>
        <div>
            <div class="text-lg font-semibold dark:text-gray-100">SIKAD</div>
            <div class="text-sm text-gray-500 dark:text-gray-400">Dashboard</div>
        </div>
    </div>

    <nav class="space-y-1">
        <a href="/dashboard"
            class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-100">
            <span class="w-6 text-center">🏠</span>
            <span class="truncate">Home</span>
        </a>
        @can('major.read')
            <a href="/major"
                class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-100 ">
                <span class="w-6 text-center">📦</span>
                <span>Program Studi</span>
            </a>
        @endcan
        @can('lecturer.read')
            <a href="/lecturer"
                class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-100 ">
                <span class="w-6 text-center">👨‍🏫</span>
                <span>Dosen</span>
            </a>
        @endcan
        @can('student.read')
            <a href="/student"
                class="flex items-center gap-3 px-3 py-2 rounded hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-gray-100 ">
                <span class="w-6 text-center">🎓</span>
                <span>Mahasiswa</span>
            </a>
        @endcan
    </nav>

    <div class="pt-4 border-t border-gray-100 dark:border-gray-700 mt-auto">
        <div class="text-xs text-gray-500 uppercase mb-2 dark:text-gray-400">Quick</div>
        {{-- <div class="flex justify-between gap-2 items-center"> --}}
        <a href="{{ route('profile.edit') }}"
            class="text-white dark:text-gray-100 bg-secondary py-2 px-4 focus:outline-none dark:hover:bg-gray-900 rounded text-lg flex items-start justify-normal  gap-2">
            <x-lucide-user width="20" height="20" class="inline" />
            {{ __('Profile') }}
        </a>
        {{-- </div> --}}
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-responsive-nav-link class="text-red-500 dark:text-red-800" :href="route('logout')"
                onclick="event.preventDefault(); this.closest('form').submit();">

                <x-lucide-log-out width="20" height="20" class="inline" />
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </div>

    {{-- <div class="mt-6 text-xs text-gray-400">v1.0 • Tailwind demo</div> --}}
</aside>
