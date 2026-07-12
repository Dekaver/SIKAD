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
                <!-- Page Heading -->
                @isset($header)
                    <div class="max-w-7xl mx-auto px-4 sm:px-2 lg:px-4 mb-4">
                        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                            {{ $header }}
                        </h2>
                    </div>
                @endisset

                <div class="max-w-7xl mx-auto px-4 sm:px-2 lg:px-4 dark:text-gray-100">
                    {{ $slot }}
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <div
                    class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-sm text-gray-500 flex items-center justify-between dark:text-gray-400 dark:bg-gray-800">
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

</body>

</html>
