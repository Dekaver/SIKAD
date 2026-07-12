<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Program Studi') }}
        </h2>
    </x-slot>

    <div class="rounded-md shadow-sm py-4 bg-slate-50 dark:bg-gray-800 p-4">
        <form action="{{ route('program-studi.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-6 flex flex-col">
                    <x-input-label for="name" :value="__('Nama Program Studi')" />
                    <x-text-input id="major_name" name="name" placeholder="Program Studi" type="text"
                        class="mt-1 block w-full" value="{{ old('name') }}" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="col-span-3 flex flex-col">
                    <x-input-label for="code" :value="__('Kode Huruf')" />
                    <x-text-input id="major_code" name="code" placeholder="Kode Huruf" type="text"
                        class="mt-1 block w-full" value="{{ old('code') }}" required autofocus />
                    <x-input-error :messages="$errors->get('code')" class="mt-2" />
                </div>

                <div class="col-span-3 flex flex-col">
                    <x-input-label for="code_number" :value="__('Kode Angka')" />
                    <x-text-input id="major_code_number" name="code_number" placeholder="Kode Angka" type="number"
                        min="0" max="99" class="mt-1 block w-full" value="{{ old('code_number') }}"
                        required autofocus />
                    <x-input-error :messages="$errors->get('code_number')" class="mt-2" />
                </div>

                <div class="col-span-12 flex flex-col">
                    <x-input-label for="description" :value="__('Deskripsi Program Studi')" />
                    <x-textarea id="description" name="description" placeholder="Deskripsi Program Studi"
                        class="mt-1 block w-full" value="{{ old('description') }}" required autofocus />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
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
