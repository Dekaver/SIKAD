<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Program Studi') }}
        </h2>
    </x-slot>

    <x-card>
        <div class="flex justify-between gap-2 items-center">
            <a href="{{ route('user.index') }}"
                class="text-white dark:text-gray-100 bg-secondary border border-gray-400 py-2 px-4 focus:outline-none dark:hover:bg-gray-900 rounded text-lg flex items-center justify-center max-w-min gap-2">
                <x-lucide-arrow-left width="20" height="20" class="inline" />
                {{ __('Batal') }}
            </a>
        </div>
    </x-card>

    <div class="rounded-md shadow-sm py-4 bg-slate-50 dark:bg-gray-800 p-4 mt-4">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6 flex flex-col">
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input name="name" placeholder="User" type="text" class="mt-1 block w-full"
                        value="{{ old('name') }}" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="col-span-6 flex flex-col">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" placeholder="Email" type="email"
                        class="mt-1 block w-full" value="{{ old('email') }}" required />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="col-span-6 flex flex-col">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input name="password" placeholder="Password" type="password" class="mt-1 block w-full"
                        required />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="col-span-6 flex flex-col">
                    <x-input-label for="role" :value="__('Role')" />
                    <select name="role"
                        class="mt-1 block w-full bg-white border border-gray-400 py-2 px-4 rounded-md dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600"
                        required>
                        <option value="">{{ __('Pilih Role') }}</option>
                        <option value="admin" @selected(old('role') == 'admin')>{{ __('Admin') }}</option>
                        <option value="lecturer" @selected(old('role') == 'lecturer')>{{ __('Dosen') }}</option>
                        <option value="student" @selected(old('role') == 'student')>{{ __('Mahasiswa') }}</option>
                    </select>
                    <x-input-error :messages="$errors->get('role')" class="mt-2" />
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
