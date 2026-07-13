<x-app-layout>
    <x-card>
        <x-slot name="title">
            {{ __('Detail Program Studi') }}
        </x-slot>

        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-6 flex flex-col">
                <x-input-label for="name" :value="__('Nama Program Studi')" />
                <x-text-input id="major_name" name="name" placeholder="Program Studi" type="text"
                    class="mt-1 block w-full" value="{{ $program_studi->name }}" required autofocus />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="col-span-3 flex flex-col">
                <x-input-label for="code" :value="__('Kode Huruf')" />
                <x-text-input id="major_code" name="code" placeholder="Kode Huruf" type="text"
                    class="mt-1 block w-full" value="{{ $program_studi->code }}" required autofocus />
                <x-input-error :messages="$errors->get('code')" class="mt-2" />
            </div>

            <div class="col-span-3 flex flex-col">
                <x-input-label for="code_number" :value="__('Kode Angka')" />
                <x-text-input id="major_code_number" name="code_number" placeholder="Kode Angka" type="text"
                    class="mt-1 block w-full" value="{{ $program_studi->code_number }}" required autofocus />
                <x-input-error :messages="$errors->get('code_number')" class="mt-2" />
            </div>

            <div class="col-span-12 flex flex-col">
                <x-input-label for="description" :value="__('Deskripsi Program Studi')" />
                <x-textarea id="description" name="description" placeholder="Deskripsi Program Studi"
                    class="mt-1 block w-full" value="{{ $program_studi->description }}" required autofocus />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
        </div>
        <x-slot name="footer">
            <div class="flex justify-end gap-2">
                <x-secondary-button onclick="window.location.href = ('{{ route('program-studi.index') }}')">
                    {{ __('Kembali') }}
                </x-secondary-button>
                <a href="{{ route('program-studi.edit', $program_studi->id) }}"
                    class="p-3 text-white bg-yellow-500 dark:bg-yellow-700 border rounded-md border-gray-200 dark:border-gray-700">
                    Edit
                </a>
            </div>
        </x-slot>
    </x-card>
</x-app-layout>
