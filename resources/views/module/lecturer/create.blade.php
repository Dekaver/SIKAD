<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Dosen') }}
        </h2>
    </x-slot>

    <x-card>
        <div class="flex justify-between gap-2 items-center">
            <a href="{{ route('lecturer.index') }}"
                class="text-white dark:text-gray-100 bg-secondary border border-gray-400 py-2 px-4 focus:outline-none dark:hover:bg-gray-900 rounded text-lg flex items-center justify-center max-w-min gap-2">
                <x-lucide-arrow-left width="20" height="20" class="inline" />
                {{ __('Batal') }}
            </a>
        </div>
    </x-card>

    <div class="rounded-md shadow-sm py-4 bg-slate-50 dark:bg-gray-800 p-4 mt-4">
        <form action="{{ route('lecturer.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6 flex flex-col">
                    <x-input-label for="user_id" :value="__('Pengguna')" />
                    <select name="user_id"
                        class="mt-1 block w-full bg-white border border-gray-400 py-2 px-4 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600"
                        required>
                        <option value="">{{ __('Pilih User') }}</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" @selected(old('user_id') == $user->id)>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                </div>
                <div class="col-span-6 flex flex-col">
                    <x-input-label for="major_id" :value="__('Program Studi')" />
                    <select name="major_id"
                        class="mt-1 block w-full bg-white border border-gray-400 py-2 px-4 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600"
                        required>
                        <option value="">{{ __('Pilih Program Studi') }}</option>
                        @foreach ($majors as $major)
                            <option value="{{ $major->id }}" @selected(old('major_id') == $major->id)>
                                {{ $major->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('major_id')" class="mt-2" />
                </div>

                <div class="col-span-6 flex flex-col">
                    <x-input-label for="name" :value="__('Nama Dosen')" />
                    <x-text-input id="lecture_name" name="name" placeholder="Dosen" type="text"
                        class="mt-1 block w-full" value="{{ old('name') }}" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="col-span-3 flex flex-col">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="lecture_email" name="email" placeholder="{{ __('Email') }}" type="text"
                        class="mt-1 block w-full" value="{{ old('email') }}" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="col-span-3 flex flex-col">
                    <x-input-label for="phone" :value="__('No. Hp')" />
                    <x-text-input id="lecture_phone" name="phone" placeholder="{{ __('No. Hp') }}" type="text"
                        class="mt-1 block w-full" value="{{ old('phone') }}" required autofocus />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <div class="col-span-3 flex flex-col">
                    <x-input-label for="nidn" :value="__('NIDN')" />
                    <x-text-input id="nidn" name="nidn" placeholder="NIDN" type="text"
                        class="mt-1 block w-full" value="{{ old('nidn') }}" required autofocus />
                    <x-input-error :messages="$errors->get('nidn')" class="mt-2" />
                </div>

                <div class="col-span-3 flex flex-col">
                    <x-input-label for="code_number" :value="__('Jenis Kelamin')" />
                    <select name="gender"
                        class="mt-1 block w-full bg-white border border-gray-400 py-2 px-4 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600"
                        required>
                        <option value="">{{ __('Pilih Jenis Kelamin') }}</option>
                        <option value="laki_laki" @selected(old('gender') == 'laki')>{{ __('Laki-laki') }}</option>
                        <option value="perempuan" @selected(old('gender') == 'perempuan')>{{ __('Perempuan') }}</option>
                    </select>
                    <x-input-error :messages="$errors->get('code_number')" class="mt-2" />
                </div>

                <div class="col-span-3 flex flex-col">
                    <x-input-label for="place_of_birth" :value="__('Tempat Lahir')" />
                    <x-text-input id="place_of_birth" name="place_of_birth" placeholder="{{ __('Tempat Lahir') }}"
                        type="text" class="mt-1 block w-full" value="{{ old('nidn') }}" required autofocus />
                    <x-input-error :messages="$errors->get('nidn')" class="mt-2" />
                </div>

                <div class="col-span-3 flex flex-col">
                    <x-input-label for="birth_date" :value="__('Tanggal Lahir')" />
                    <x-text-input id="birth_date" name="birth_date" placeholder="{{ __('Tanggal Lahir') }}"
                        type="date" class="mt-1 block w-full" value="{{ old('nidn') }}" required autofocus />
                    <x-input-error :messages="$errors->get('nidn')" class="mt-2" />
                </div>

                <div class="col-span-12 flex flex-col">
                    <x-input-label for="address" :value="__('Alamat')" />
                    <x-textarea id="address" name="address" placeholder="{{ __('Alamat') }}"
                        class="mt-1 block w-full" required autofocus>
                        {{ old('address') }}
                    </x-textarea>
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>
            </div>


            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="ml-4">
                    {{ __('Simpan') }}
                </x-primary-button>
            </div>
        </form>
    </div>


</x-app-layout>
