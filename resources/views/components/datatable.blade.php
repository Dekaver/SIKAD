@props([
    'columns' => [],
    'data' => [],
    'empty' => 'Tidak ada data.',
])

<div class="overflow-hidden bg-white border border-gray-200 rounded-md shadow-sm dark:bg-gray-800 dark:border-gray-700">
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-800">
                <tr>
                    @foreach ($columns as $column)
                        <th class="px-6 py-3 text-left text-xs font-semibold uppercase tracking-wider text-gray-500">
                            {{ $column['label'] }}
                        </th>
                    @endforeach


                    @isset($actions)
                        <th class="px-6 py-3 w-32 dark:text-gray-100">Action</th>
                    @endisset
                </tr>
            </thead>

            <tbody class="divide-y divide-gray-100 bg-white dark:bg-gray-800 dark:divide-gray-700">

                @forelse($data as $row)

                    <tr class="hover:bg-gray-50 transition dark:hover:bg-gray-700">

                        @foreach ($columns as $column)
                            <td class="px-6 py-4 text-sm text-gray-700 whitespace-nowrap">

                                {{ data_get($row, $column['field']) }}

                            </td>
                        @endforeach

                        @isset($actions)
                            <td class="px-6 py-4 text-right">
                                {{ $actions($row) }}
                            </td>
                        @endisset

                    </tr>

                @empty

                    <tr>
                        <td colspan="{{ count($columns) + 1 }}" class="py-10 text-center text-gray-500">

                            {{ $empty }}

                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>
    </div>

    @isset($pagination)
        <div class="border-t border-gray-200 px-6 py-4 dark:border-gray-700">
            {{ $pagination }}
        </div>
    @endisset

</div>
