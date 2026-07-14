<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>
    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            {{-- Nama --}}
            <div>
                <x-input-label for="name" value="Nama Lengkap" />
                <x-text-input id="name" name="name" class="mt-1 block w-full" :value="old('name', $user->name)" />
                <x-input-error :messages="$errors->get('name')" />
            </div>

            {{-- Email --}}
            <div>
                <x-input-label for="email" value="Email" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                    :value="old('email', $user->email)" />
                <x-input-error :messages="$errors->get('email')" />
            </div>

            {{-- Phone --}}
            <div>
                <x-input-label for="phone" value="No. Telepon" />
                <x-text-input id="phone" name="phone" class="mt-1 block w-full" :value="old('phone', $user->student?->phone ?? $user->lecturer?->phone)" />
                <x-input-error :messages="$errors->get('phone')" />
            </div>

            {{-- Tempat Lahir --}}
            <div>
                <x-input-label for="place_of_birth" value="Tempat Lahir" />
                <x-text-input id="place_of_birth" name="place_of_birth" class="mt-1 block w-full" :value="old('place_of_birth', $user->student?->place_of_birth ?? $user->lecturer?->place_of_birth)" />
            </div>

            {{-- Tanggal Lahir --}}
            <div>
                <x-input-label for="birth_date" value="Tanggal Lahir" />
                <x-text-input id="birth_date" name="birth_date" type="date" class="mt-1 block w-full"
                    :value="old('birth_date', $user->birth_date)" />
            </div>

            {{-- Jenis Kelamin --}}
            <div>
                <x-input-label for="code_number" :value="__('Jenis Kelamin')" />
                <select name="gender"
                    class="mt-1 block w-full bg-white border border-gray-400 py-2 px-4 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600"
                    required>
                    <option value="">{{ __('Pilih Jenis Kelamin') }}</option>
                    <option value="laki_laki" @selected(old('gender', $user->gender) == 'laki_laki')>{{ __('Laki-laki') }}</option>
                    <option value="perempuan" @selected(old('gender', $user->gender) == 'perempuan')>{{ __('Perempuan') }}</option>
                </select>
                <x-input-error :messages="$errors->get('code_number')" class="mt-2" />
            </div>

        </div>

        <div>
            <x-input-label for="address" value="Alamat" />
            <x-textarea id="address" name="address" rows="4"
                class="mt-1 block w-full rounded-md border-gray-300">{{ old('address', $user->address) }}</x-textarea>
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
