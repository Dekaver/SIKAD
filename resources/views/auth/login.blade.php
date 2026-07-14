<x-guest-layout>
    <a href="/" class="mb-10 flex items-center gap-3">
        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-xl font-bold text-white">
            S
        </div>

        <div>
            <h1 class="text-xl font-bold text-slate-900 dark:text-white">
                SIKAD
            </h1>

            <p class="text-sm text-slate-500">
                Sistem Informasi Akademik
            </p>
        </div>
    </a>

    <div class="rounded-2xl bg-white p-8 shadow-xl dark:bg-slate-900">

        <h2 class="text-3xl font-bold text-slate-900 dark:text-white">
            Selamat Datang
        </h2>

        <p class="mt-2 text-slate-500">
            Silakan masuk menggunakan akun yang diberikan administrator.
        </p>

        <form class="mt-8 space-y-5" action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-300">
                    Email
                </label>

                <input type="text" name="email" placeholder="Masukkan Email" type="email"
                    class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-blue-600 dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div>
                <label class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-300">
                    Password
                </label>
                <input type="password" name="password" placeholder="••••••••"
                    class="w-full rounded-xl border border-slate-300 bg-white px-4 py-3 outline-none transition focus:border-blue-600 dark:border-slate-700 dark:bg-slate-800 dark:text-white">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button class="w-full rounded-xl bg-blue-600 py-3 font-semibold text-white transition hover:bg-blue-700"
                type="submit">
                Login
            </button>
        </form>

        <p class="mt-6 text-center text-sm text-slate-500">
            Belum memiliki akun?
            <span class="font-medium text-slate-700 dark:text-slate-300">
                Hubungi Administrator.
            </span>
        </p>

    </div>

    <div class="mt-8 flex justify-center">

        <button id="theme-toggle"
            class="rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm dark:border-slate-700 dark:bg-slate-900 dark:text-white">
            🌙 Ganti Tema
        </button>

    </div>
</x-guest-layout>
