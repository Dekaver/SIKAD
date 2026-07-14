<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <x-card>
        <div class="flex justify-between gap-2 items-center">
            <a href="{{ route('dashboard') }}"
                class="text-white dark:text-gray-100 bg-secondary border border-gray-400 py-2 px-4 focus:outline-none dark:hover:bg-gray-900 rounded text-lg flex items-center justify-center max-w-min gap-2">
                <x-lucide-arrow-left width="20" height="20" class="inline" />
                {{ __('Kembali') }}
            </a>
        </div>
    </x-card>

    @can('student')
        <div class="py-4">
            <x-card>
                @include('profile.partials.akademik-student-information')
            </x-card>
        </div>
    @endcan

    @can('lecturer')
        <div class="py-4">
            <x-card>
                @include('profile.partials.akademik-lecturer-information')
            </x-card>
        </div>
    @endcan


    <div class="py-4">
        <x-card>
            @include('profile.partials.update-profile-information-form')
        </x-card>
    </div>

    <div class="py-4">
        <x-card>

            @include('profile.partials.update-password-form')
        </x-card>
    </div>
</x-app-layout>
