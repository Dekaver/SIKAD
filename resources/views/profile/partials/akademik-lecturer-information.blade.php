<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Akademik Information') }}
        </h2>
    </header>
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <x-input-label value="Program Studi" />
                <x-text-input class="mt-1 block w-full bg-gray-100" :value="$user->lecturer?->major?->name" readonly />
            </div>

            <div>
                <x-input-label value="NIDN" />
                <x-text-input class="mt-1 block w-full bg-gray-100" :value="$user->lecturer?->nidn" readonly />
            </div>
        </div>
    </form>
</section>
