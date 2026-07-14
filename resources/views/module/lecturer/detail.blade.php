<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Detail Dosen') }}
        </h2>
    </x-slot>

    <x-card>
        <div class="flex justify-between gap-2 items-center">
            <a href="{{ route('lecturer.index') }}"
                class="text-white dark:text-gray-100 bg-secondary border border-gray-400 py-2 px-4 focus:outline-none dark:hover:bg-gray-900 rounded text-lg flex items-center justify-center max-w-min gap-2">
                <x-lucide-arrow-left width="20" height="20" class="inline" />
                {{ __('Kembali') }}
            </a>

            <a href="{{ route('lecturer.edit', $lecturer->id) }}"
                class="text-white bg-indigo-600 hover:bg-indigo-700 py-2 px-4 rounded text-lg flex items-center justify-center gap-2">
                {{ __('Edit Dosen') }}
            </a>
        </div>
    </x-card>

    <div class="rounded-md shadow-sm py-4 bg-slate-50 dark:bg-gray-800 p-4 mt-4">
        <div class="grid grid-cols-12 gap-4">

            <div class="col-span-6 flex flex-col">
                <x-input-label :value="__('Pengguna')" class="text-gray-500 dark:text-gray-400" />
                <div
                    class="mt-1 p-2 block w-full bg-gray-100 border border-transparent rounded-md dark:bg-gray-900 dark:text-gray-300">
                    {{ $lecturer->user->name ?? '-' }}
                </div>
            </div>

            <div class="col-span-6 flex flex-col">
                <x-input-label :value="__('Program Studi')" class="text-gray-500 dark:text-gray-400" />
                <div
                    class="mt-1 p-2 block w-full bg-gray-100 border border-transparent rounded-md dark:bg-gray-900 dark:text-gray-300">
                    {{ $lecturer->major->name ?? '-' }}
                </div>
            </div>

            <div class="col-span-6 flex flex-col">
                <x-input-label :value="__('Nama Dosen')" class="text-gray-500 dark:text-gray-400" />
                <div
                    class="mt-1 p-2 block w-full bg-gray-100 border border-transparent rounded-md dark:bg-gray-900 dark:text-gray-300 font-medium">
                    {{ $lecturer->name }}
                </div>
            </div>

            <div class="col-span-3 flex flex-col">
                <x-input-label :value="__('Email')" class="text-gray-500 dark:text-gray-400" />
                <div
                    class="mt-1 p-2 block w-full bg-gray-100 border border-transparent rounded-md dark:bg-gray-900 dark:text-gray-300">
                    {{ $lecturer->email }}
                </div>
            </div>

            <div class="col-span-3 flex flex-col">
                <x-input-label :value="__('No. Hp')" class="text-gray-500 dark:text-gray-400" />
                <div
                    class="mt-1 p-2 block w-full bg-gray-100 border border-transparent rounded-md dark:bg-gray-900 dark:text-gray-300">
                    {{ $lecturer->phone }}
                </div>
            </div>

            <div class="col-span-3 flex flex-col">
                <x-input-label :value="__('NIDN')" class="text-gray-500 dark:text-gray-400" />
                <div
                    class="mt-1 p-2 block w-full bg-gray-100 border border-transparent rounded-md dark:bg-gray-900 dark:text-gray-300">
                    {{ $lecturer->nidn }}
                </div>
            </div>

            <div class="col-span-3 flex flex-col">
                <x-input-label :value="__('Jenis Kelamin')" class="text-gray-500 dark:text-gray-400" />
                <div
                    class="mt-1 p-2 block w-full bg-gray-100 border border-transparent rounded-md dark:bg-gray-900 dark:text-gray-300">
                    @if ($lecturer->gender == 'laki_laki' || $lecturer->gender == 'laki')
                        {{ __('Laki-laki') }}
                    @elseif($lecturer->gender == 'perempuan')
                        {{ __('Perempuan') }}
                    @else
                        {{ $lecturer->gender ?? '-' }}
                    @endif
                </div>
            </div>

            <div class="col-span-3 flex flex-col">
                <x-input-label :value="__('Tempat Lahir')" class="text-gray-500 dark:text-gray-400" />
                <div
                    class="mt-1 p-2 block w-full bg-gray-100 border border-transparent rounded-md dark:bg-gray-900 dark:text-gray-300">
                    {{ $lecturer->place_of_birth ?? '-' }}
                </div>
            </div>

            <div class="col-span-3 flex flex-col">
                <x-input-label :value="__('Tanggal Lahir')" class="text-gray-500 dark:text-gray-400" />
                <div
                    class="mt-1 p-2 block w-full bg-gray-100 border border-transparent rounded-md dark:bg-gray-900 dark:text-gray-300">
                    {{ $lecturer->birth_date?->format('d F Y') ?? '-' }}
                </div>
            </div>

            <div class="col-span-12 flex flex-col">
                <x-input-label :value="__('Alamat')" class="text-gray-500 dark:text-gray-400" />
                <div
                    class="mt-1 p-2 block w-full bg-gray-100 border border-transparent rounded-md dark:bg-gray-900 dark:text-gray-300 min-h-[80px]">
                    {{ $lecturer->address ?? '-' }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
