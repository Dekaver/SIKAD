<x-app-layout>
    <x-slot name="header">
        {{ __('Program studi') }}
    </x-slot>

    {{-- New Button --}}
    <x-card>
        <div class="flex justify-between gap-2 items-center">
            <a href="{{ route('user.create') }}"
                class="text-white dark:text-gray-100 bg-green-500 dark:bg-green-700 border-0 py-2 px-4 focus:outline-none dark:hover:bg-green-800 rounded text-lg flex items-center justify-center max-w-min gap-2">
                <x-lucide-plus width="20" height="20" class="inline" />
                {{ __('Tambah') }}
            </a>
            <a href="#" onclick="alert('Fitur belum tersedia')"
                class="text-white dark:text-gray-100 bg-violet-500 dark:bg-violet-700 border-0 py-2 px-4 focus:outline-none dark:hover:bg-violet-800 rounded text-lg flex items-center justify-center max-w-min gap-2">
                <x-lucide-download width="20" height="20" class="inline" />
                {{ __('Export') }}
            </a>
        </div>
    </x-card>
    {{-- Table --}}
    <div class="py-4">
        <div
            class="overflow-hidden bg-white border border-gray-200 rounded-md shadow-sm dark:bg-gray-800 dark:border-gray-700">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-900">
                        <tr>

                            <th
                                class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                No
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Name
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Email
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Role
                            </th>
                            <th class="px-6 py-3 w-32 dark:text-gray-100">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 bg-white dark:bg-gray-800 dark:divide-gray-700">
                        @forelse($users as $row)
                            <tr class="hover:bg-gray-50 transition dark:hover:bg-gray-900">

                                <td
                                    class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap dark:text-gray-300 dark:hover:text-white">
                                    {{ $loop->iteration }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap dark:text-gray-300 dark:hover:text-white">
                                    {{ $row->name }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap dark:text-gray-300 dark:hover:text-white">
                                    {{ $row->email }}
                                </td>
                                <td
                                    class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap dark:text-gray-300 dark:hover:text-white">
                                    {{ $row->role }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('user.show', $row->id) }}"
                                        class="text-yellow-600 hover:underline">
                                        <x-lucide-eye width="20" height="20" class="inline" />
                                    </a>
                                    <a href="{{ route('user.edit', $row->id) }}"
                                        class="text-indigo-600 hover:underline">
                                        <x-lucide-edit width="20" height="20" class="inline" />
                                    </a>
                                    <a class="text-red-600 hover:underline" x-data="" href="#"
                                        x-on:click.prevent="
                                            $dispatch('open-modal', 'confirm-deletion')
                                            $dispatch('set-delete-data', { url: '{{ route('user.destroy', $row->id) }}', message: '{{ $row->name }}' })
                                        ">
                                        <x-lucide-trash width="20" height="20" class="inline" />
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-10 text-center text-gray-500"> {{ __('Tidak ada data') }}
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="p-4 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-900">
                {{ $users->links() }}
            </div>
        </div>
    </div>

</x-app-layout>
