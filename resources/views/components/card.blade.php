<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-4 text-gray-900 dark:text-gray-100">
        {{-- title --}}
        @isset($title)
            <div class="flex items-center justify-between mb-3">
                <h2 class="text-lg font-semibold">{{ $title }}</h2>
            </div>
        @endisset
        {{ $slot }}
        @isset($footer)
            <div class="flex items-center justify-end mt-4">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>
