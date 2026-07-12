<x-app-layout>
    <x-slot name="header">
        {{ __('Program studi') }}
    </x-slot>

    {{-- New Button --}}
    <div class="pt-2">
        <a href="{{ route('program-studi.create') }}"
            class="text-white bg-green-500 dark:bg-green-600 border-0 py-2 px-4 focus:outline-none dark:hover:bg-green-800 rounded text-lg flex items-center justify-center max-w-min">
            <x-lucide-plus width="20" height="20" class="inline" />
            {{ __('Tambah') }}
        </a>
    </div>
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
                                Kode Huruf
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Kode Angka
                            </th>
                            <th
                                class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                                Nama
                            </th>
                            <th class="px-6 py-3 w-32 dark:text-gray-100">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 bg-white dark:bg-gray-800 dark:divide-gray-700">
                        @forelse($majors as $row)
                            <tr class="hover:bg-gray-50 transition dark:hover:bg-gray-900">
                                <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap dark:hover:text-white">
                                    {{ $row->code }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap dark:hover:text-white">
                                    {{ $row->code_number }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap dark:hover:text-white">
                                    {{ $row->name }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('program-studi.edit', $row->id) }}"
                                        class="text-indigo-600 hover:underline">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="{{ count($columns) + 1 }}" class="py-10 text-center text-gray-500"></td>
                                <td colspan="{{ count($columns) + 1 }}" class="py-10 text-center text-gray-500"></td>
                                <td colspan="{{ count($columns) + 1 }}" class="py-10 text-center text-gray-500"></td>
                                <td colspan="{{ count($columns) + 1 }}" class="py-10 text-center text-gray-500"></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
