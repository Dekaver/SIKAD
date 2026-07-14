<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full bg-slate-100 dark:bg-slate-950">

    <div class="grid min-h-screen lg:grid-cols-2">

        <!-- Login -->
        <div class="flex items-center justify-center p-8">

            <div class="w-full max-w-md">
                {{ $slot }}
            </div>

        </div>

        <!-- Hero -->
        <div class="relative hidden overflow-hidden lg:block">

            <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1600&q=80"
                class="absolute inset-0 h-full w-full object-cover" alt="Campus">

            <div class="absolute inset-0 bg-blue-900/60"></div>

            <div class="relative flex h-full items-center justify-center p-20">

                <div class="max-w-lg text-white">

                    <h2 class="text-5xl font-bold leading-tight">
                        Sistem Informasi Akademik
                    </h2>

                    <p class="mt-6 text-lg leading-8 text-blue-100">
                        Menghubungkan mahasiswa, dosen, dan administrator
                        dalam satu platform yang modern, cepat, dan mudah digunakan.
                    </p>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
