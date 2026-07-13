<!doctype html>
<html lang="id">

<head>
    @include('layouts.partials.header')
    @stack('head')
</head>

<body class="min-h-screen bg-gray-100 font-sans text-gray-800">

    <!-- Toggle input for small screens (no JS) -->
    <input id="nav-toggle" type="checkbox" aria-hidden="true" />
    <div class="layout relative flex min-h-screen">

        <!-- Sidebar -->
        @include('layouts.partials.sidebar')

        <!-- Overlay for small screens -->
        <label for="nav-toggle" class="overlay" aria-hidden="true"></label>

        <!-- Main content area -->
        <div class="flex-1 min-h-screen main flex flex-col">

            <!-- Topbar -->
            @include('layouts.partials.topbar')

            <!-- Page content -->
            <main class="flex-1 w-full py-4 dark:bg-gray-700">
                <div class=" mx-auto px-4 sm:px-2 lg:px-4 dark:text-gray-100">
                    {{ $slot }}
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <div
                    class="mx-auto px-4 sm:px-6 lg:px-8 py-4 text-sm text-gray-500 flex items-center justify-between dark:text-gray-400 dark:bg-gray-800">
                    <div>© 2026 Company — All rights reserved</div>
                    <div class="hidden sm:flex gap-4">
                        <a href="#" class="hover:underline">Privacy</a>
                        <a href="#" class="hover:underline">Terms</a>
                        <a href="#" class="hover:underline">Contact</a>
                    </div>
                </div>
            </footer>

        </div>
    </div>
    <x-modal name="confirm-deletion" focusable>
        <div x-data="{ actionUrl: '', modalMessage: '' }"
            @set-delete-data.window="actionUrl = $event.detail.url; modalMessage = $event.detail.message">

            <form method="post" :action="actionUrl" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Are you sure you want to delete?') }}
                    <span x-data-url="data-url"></span>
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400" x-text="modalMessage">
                </p>

                <small
                    class="italic text-red-500">{{ __('Once deleted, all of its resources and data will be permanently deleted.') }}</small>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button type="button" x-on:click="$dispatch('close-modal', 'confirm-deletion')">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-danger-button class="ml-3">
                        {{ __('Delete') }}
                    </x-danger-button>
                </div>
            </form>
        </div>

    </x-modal>
    <script>
        // Mendengar saat ada instruksi BUKA modal
        window.addEventListener('open-modal', (event) => {
            const modal = event.relatedTarget;
            console.log(event);
            const namaModalYangTerbuka = event.detail;
            console.log(`Modal "${namaModalYangTerbuka}" sedang dibuka.`);

            if (namaModalYangTerbuka === 'modal-user-detail') {
                // Lakukan aksi spesifik di sini (misal: Fetch API data)
                console.log('Aksi khusus untuk modal user detail dijalankan.');
            }
        });

        // Mendengar saat ada instruksi TUTUP modal
        window.addEventListener('close-modal', (event) => {
            const namaModalYangTertutup = event.detail;
            console.log(`Modal "${namaModalYangTertutup}" sedang ditutup.`);
        });
    </script>

</body>

</html>
