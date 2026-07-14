<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIKAD - Sistem Informasi Akademik</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            darkMode: 'class'
        }

        if (
            localStorage.theme === 'dark' ||
            (!('theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark')
        }
    </script>
</head>

<body class="bg-slate-50 text-slate-800 transition-colors duration-300 dark:bg-slate-950 dark:text-slate-100">

    <!-- Navbar -->
    <header
        class="sticky top-0 z-50 border-b border-slate-200 bg-white/80 backdrop-blur dark:border-slate-800 dark:bg-slate-900/80">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

            <a href="#" class="flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-600 text-lg font-bold text-white">
                    S
                </div>

                <div>
                    <h1 class="text-lg font-bold">SIKAD</h1>
                    <p class="text-xs text-slate-500 dark:text-slate-400">
                        Sistem Informasi Akademik
                    </p>
                </div>
            </a>

            <nav class="hidden items-center gap-8 md:flex">
                <a href="#" class="hover:text-blue-600">Beranda</a>
                <a href="#tentang" class="hover:text-blue-600">Tentang</a>
            </nav>

            <div class="flex items-center gap-3">

                <button id="theme-toggle"
                    class="rounded-lg border border-slate-300 p-2 transition hover:bg-slate-100 dark:border-slate-700 dark:hover:bg-slate-800">

                    <svg id="icon-sun" class="hidden h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.364 6.364-1.414-1.414M7.05 7.05 5.636 5.636m12.728 0L16.95 7.05M7.05 16.95l-1.414 1.414" />
                        <circle cx="12" cy="12" r="4" stroke-width="2"></circle>
                    </svg>

                    <svg id="icon-moon" class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12.79A9 9 0 1111.21 3a7 7 0 009.79 9.79z" />
                    </svg>

                </button>

                <a href="/login"
                    class="rounded-lg bg-blue-600 px-5 py-2 font-medium text-white transition hover:bg-blue-700">
                    Login
                </a>

            </div>

        </div>
    </header>

    <!-- Hero -->
    <section class="py-20">

        <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 lg:grid-cols-2">

            <div>

                <span
                    class="rounded-full bg-blue-100 px-3 py-1 text-sm font-medium text-blue-700 dark:bg-blue-900/40 dark:text-blue-300">
                    Selamat Datang
                </span>

                <h2 class="mt-6 text-5xl font-extrabold leading-tight">
                    Sistem Informasi
                    <span class="text-blue-600">
                        Akademik
                    </span>
                </h2>

                <p class="mt-6 text-lg leading-8 text-slate-600 dark:text-slate-400">
                    Platform akademik untuk membantu mahasiswa,
                    dosen, dan administrator mengelola aktivitas
                    akademik secara mudah, cepat, dan terintegrasi.
                </p>

                <div class="mt-10 flex gap-4">

                    <a href="/login"
                        class="rounded-xl bg-blue-600 px-6 py-3 font-semibold text-white transition hover:bg-blue-700">
                        Login
                    </a>

                </div>

            </div>

            <div>

                <img src="https://images.unsplash.com/photo-1562774053-701939374585?auto=format&fit=crop&w=1200&q=80"
                    alt="Campus" class="rounded-3xl shadow-2xl">

            </div>

        </div>

    </section>

    <!-- Tentang -->
    <section id="tentang" class="py-20">

        <div class="mx-auto max-w-6xl px-6">

            <div class="text-center">

                <h2 class="text-3xl font-bold">
                    Fitur Utama
                </h2>

                <p class="mt-4 text-slate-600 dark:text-slate-400">
                    Sistem ini digunakan oleh seluruh civitas akademika.
                </p>

            </div>

            <div class="mt-12 grid gap-8 md:grid-cols-3">

                <div
                    class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg dark:border-slate-800 dark:bg-slate-900">

                    <div class="mb-4 text-4xl">
                        🎓
                    </div>

                    <h3 class="text-xl font-semibold">
                        Mahasiswa
                    </h3>

                    <p class="mt-3 text-slate-600 dark:text-slate-400">
                        Melihat dan memperbarui informasi pribadi serta
                        mengakses layanan akademik.
                    </p>

                </div>

                <div
                    class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg dark:border-slate-800 dark:bg-slate-900">

                    <div class="mb-4 text-4xl">
                        👨‍🏫
                    </div>

                    <h3 class="text-xl font-semibold">
                        Dosen
                    </h3>

                    <p class="mt-3 text-slate-600 dark:text-slate-400">
                        Mengelola informasi dosen dan aktivitas akademik
                        sesuai kewenangan.
                    </p>

                </div>

                <div
                    class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm transition hover:-translate-y-1 hover:shadow-lg dark:border-slate-800 dark:bg-slate-900">

                    <div class="mb-4 text-4xl">
                        🛡️
                    </div>

                    <h3 class="text-xl font-semibold">
                        Administrator
                    </h3>

                    <p class="mt-3 text-slate-600 dark:text-slate-400">
                        Mengelola pengguna, program studi,
                        dan data akademik sistem.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Footer -->
    <footer class="border-t border-slate-200 py-8 dark:border-slate-800">

        <div class="mx-auto max-w-7xl px-6 text-center text-sm text-slate-500">

            © 2026 SIKAD - Sistem Informasi Akademik

        </div>

    </footer>

    <script>
        const btn = document.getElementById('theme-toggle')

        const moon = document.getElementById('icon-moon')

        const sun = document.getElementById('icon-sun')

        function updateIcon() {
            if (document.documentElement.classList.contains('dark')) {
                moon.classList.add('hidden')
                sun.classList.remove('hidden')
            } else {
                moon.classList.remove('hidden')
                sun.classList.add('hidden')
            }
        }

        updateIcon()

        btn.addEventListener('click', () => {

            document.documentElement.classList.toggle('dark')

            if (document.documentElement.classList.contains('dark')) {
                localStorage.theme = 'dark'
            } else {
                localStorage.theme = 'light'
            }

            updateIcon()

        })
    </script>

</body>

</html>
