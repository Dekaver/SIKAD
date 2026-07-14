<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Mahasiswa') }}
        </h2>
    </x-slot>

    <x-card>
        <div class="flex justify-between gap-2 items-center">
            <a href="{{ route('student.index') }}"
                class="text-white dark:text-gray-100 bg-secondary border border-gray-400 py-2 px-4 focus:outline-none dark:hover:bg-gray-900 rounded text-lg flex items-center justify-center max-w-min gap-2">
                <x-lucide-arrow-left width="20" height="20" class="inline" />
                {{ __('Batal') }}
            </a>
        </div>
    </x-card>

    <div class="rounded-md shadow-sm py-4 bg-slate-50 dark:bg-gray-800 p-4 mt-4">
        <form action="{{ route('student.update', $student->id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-6 flex flex-col">
                    <x-input-label for="user_id" :value="__('Pengguna')" />
                    <select name="user_id"
                        class="mt-1 block w-full bg-white border border-gray-400 py-2 px-4 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600"
                        required>
                        <option value="">{{ __('Pilih User') }}</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}" @selected($student->user_id == $user->id)>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                </div>
                <div class="col-span-12 md:col-span-6 flex flex-col">
                    <x-input-label for="major_id" :value="__('Program Studi')" />
                    <select name="major_id"
                        class="mt-1 block w-full bg-white border border-gray-400 py-2 px-4 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600"
                        required>
                        <option value="">{{ __('Pilih Program Studi') }}</option>
                        @foreach ($majors as $major)
                            <option value="{{ $major->id }}" @selected($student->major_id == $major->id)>
                                {{ $major->name }}
                            </option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('major_id')" class="mt-2" />
                </div>

                <div class="col-span-12 md:col-span-6 flex flex-col">
                    <x-input-label for="name" :value="__('Nama')" />
                    <x-text-input id="lecture_name" name="name" placeholder="{{ __('Nama') }}" type="text"
                        class="mt-1 block w-full" value="{{ $student->name }}" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="col-span-12 md:col-span-3 flex flex-col">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="lecture_email" name="email" placeholder="{{ __('Email') }}" type="text"
                        class="mt-1 block w-full" value="{{ $student->email }}" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="col-span-12 md:col-span-3 flex flex-col">
                    <x-input-label for="phone" :value="__('No. Hp')" />
                    <x-text-input id="lecture_phone" name="phone" placeholder="{{ __('No. Hp') }}" type="text"
                        class="mt-1 block w-full" value="{{ $student->phone }}" required autofocus />
                    <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>

                <div class="col-span-12 md:col-span-3 flex flex-col">
                    <x-input-label for="nim" :value="__('NIM')" />
                    <x-text-input id="nim" name="nim" placeholder="NIM" type="text"
                        class="mt-1 block w-full" value="{{ $student->nim }}" required autofocus />
                    <x-input-error :messages="$errors->get('nim')" class="mt-2" />
                </div>

                <div class="col-span-12 md:col-span-3 flex flex-col">
                    <x-input-label for="academic_year" :value="__('Tahun Masuk')" />
                    <x-text-input id="academic_year" name="academic_year" placeholder="{{ __('Tahun Masuk') }}"
                        type="text" class="mt-1 block w-full" value="{{ $student->academic_year }}" required
                        autofocus />
                    <x-input-error :messages="$errors->get('academic_year')" class="mt-2" />
                </div>

                <div class="col-span-12 md:col-span-3 flex flex-col">
                    <x-input-label for="term" :value="__('Semester')" />
                    <select name="term"
                        class="mt-1 block w-full bg-white border border-gray-400 py-2 px-4 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600"
                        required>
                        <option value="1">{{ __('Ganjil') }}</option>
                        <option value="2">{{ __('Genap') }}</option>
                    </select>
                    <x-input-error :messages="$errors->get('term')" class="mt-2" />
                </div>

                <div class="col-span-12 md:col-span-3 flex flex-col">
                    <x-input-label for="code_number" :value="__('Jenis Kelamin')" />
                    <select name="gender"
                        class="mt-1 block w-full bg-white border border-gray-400 py-2 px-4 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600"
                        required>
                        <option value="">{{ __('Pilih Jenis Kelamin') }}</option>
                        <option value="laki_laki" @selected($student->gender == 'laki_laki')>{{ __('Laki-laki') }}</option>
                        <option value="perempuan" @selected($student->gender == 'perempuan')>{{ __('Perempuan') }}</option>
                    </select>
                    <x-input-error :messages="$errors->get('code_number')" class="mt-2" />
                </div>

                <div class="col-span-12 md:col-span-3 flex flex-col">
                    <x-input-label for="place_of_birth" :value="__('Tempat Lahir')" />
                    <x-text-input id="place_of_birth" name="place_of_birth" placeholder="{{ __('Tempat Lahir') }}"
                        type="text" class="mt-1 block w-full" value="{{ $student->place_of_birth }}" required
                        autofocus />
                    <x-input-error :messages="$errors->get('place_of_birth')" class="mt-2" />
                </div>

                <div class="col-span-12 md:col-span-3 flex flex-col">
                    <x-input-label for="birth_date" :value="__('Tanggal Lahir')" />
                    <x-text-input id="birth_date" name="birth_date" placeholder="{{ __('Tanggal Lahir') }}"
                        type="date" class="mt-1 block w-full"
                        value="{{ $student->birth_date?->format('Y-m-d') }}" required autofocus />
                    <x-input-error :messages="$errors->get('birth_date')" class="mt-2" />
                </div>

                <div class="col-span-12 md:col-span-12 flex flex-col">
                    <x-input-label for="address" :value="__('Alamat')" />
                    <x-textarea id="address" name="address" placeholder="{{ __('Alamat') }}"
                        class="mt-1 block w-full" required autofocus>
                        {{ $student->address }}
                    </x-textarea>
                    <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>
            </div>


            @can('student.update')
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Simpan') }}
                    </x-primary-button>
                </div>
            @endcan
        </form>
    </div>


</x-app-layout>
