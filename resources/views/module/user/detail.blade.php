<x-app-layout>
    <x-card>
        <div class="flex justify-between gap-2 items-center">
            <a href="{{ route('user.index') }}"
                class="text-white dark:text-gray-100 bg-secondary border border-gray-400 py-2 px-4 focus:outline-none dark:hover:bg-gray-900 rounded text-lg flex items-center justify-center max-w-min gap-2">
                <x-lucide-arrow-left width="20" height="20" class="inline" />
                {{ __('Batal') }}
            </a>
        </div>
    </x-card>

    <x-card class="mt-4">
        <x-slot name="title">
            {{ __('Detail User') }}
        </x-slot>

        <div class="grid grid-cols-12 gap-4">
            <div class="col-span-12 md:col-span-6 flex flex-col">
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input id="major_name" name="name" placeholder="User" type="text" class="mt-1 block w-full"
                    value="{{ $user->name }}" disabled />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="col-span-12 md:col-span-6 flex flex-col">
                <x-input-label for="code" :value="__('Email')" />
                <x-text-input id="major_code" name="code" placeholder="Email" type="text"
                    class="mt-1 block w-full" value="{{ $user->code }}" disabled />
                <x-input-error :messages="$errors->get('code')" class="mt-2" />
            </div>

            <div class="col-span-12 md:col-span-6 flex flex-col">
                <x-input-label for="description" :value="__('Role')" />
                <x-text-input id="major_role" name="role" placeholder="Kode Angka" type="text"
                    class="mt-1 block w-full" value="{{ $user->role }}" disabled />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
        </div>

        <x-slot name="footer">
            <div class="flex justify-end gap-2">
                @can('user.update')
                    <a href="{{ route('user.edit', $user->id) }}"
                        class="p-3 text-white bg-yellow-500 dark:bg-yellow-700 border rounded-md border-gray-200 dark:border-gray-700">
                        Edit
                    </a>
                @endcan
            </div>
        </x-slot>
    </x-card>
</x-app-layout>
