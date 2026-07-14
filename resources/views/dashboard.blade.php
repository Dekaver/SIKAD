<x-app-layout>
    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-4 rounded-md shadow-sm border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
            <div class="text-xs text-gray-500">{{ __('Total Pengguna') }}</div>
            <div class="text-2xl font-semibold">{{ $total_users }}</div>
            <div class="text-sm text-gray-400 mt-1"></div>
        </div>
        <div class="bg-white p-4 rounded-md shadow-sm border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
            <div class="text-xs text-gray-500">{{ __('Total Program Studi') }}</div>
            <div class="text-2xl font-semibold">{{ $total_majors }}</div>
            <div class="text-sm text-gray-400 mt-1"></div>
        </div>
        <div class="bg-white p-4 rounded-md shadow-sm border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
            <div class="text-xs text-gray-500">{{ __('Total Mahasiswa') }}</div>
            <div class="text-2xl font-semibold">{{ $total_students }}</div>
            <div class="text-sm text-gray-400 mt-1">Pending: {{ $total_pending_students }}</div>
        </div>
        <div class="bg-white p-4 rounded-md shadow-sm border border-gray-100 dark:bg-gray-800 dark:border-gray-700">
            <div class="text-xs text-gray-500">{{ __('Total Dosen') }}</div>
            <div class="text-2xl font-semibold">{{ $total_lecturers }}</div>
            <div class="text-sm text-gray-400 mt-1">Pending: {{ $total_pending_lecturers }}</div>
        </div>
    </div>

    <!-- Responsive table / list -->
    <section
        class="bg-white rounded shadow-sm border border-gray-100 overflow-hidden dark:bg-gray-800 dark:border-gray-700">
        <div class="p-4 border-b border-gray-100 flex items-center justify-between">
            <h2 class="text-lg font-semibold">{{ __('Pengguna Aktif') }}</h2>
            <div class="text-sm text-gray-500">{{ __('Showing') }} {{ $sessions->count() }} {{ __('users') }}</div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-50 text-left dark:bg-gray-900">
                    <tr>
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Role</th>
                        <th class="px-4 py-3">Last Login</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @foreach ($sessions as $user)
                        <tr>
                            <td class="px-4 py-3">{{ $loop->iteration }}</td>
                            <td class="px-4 py-3">{{ $user->name }}</td>
                            <td class="px-4 py-3">{{ $user->email }}</td>
                            <td class="px-4 py-3">{{ $user->role }}</td>
                            <td class="px-4 py-3">
                                {{ \Carbon\Carbon::parse($user->last_activity)->diffForHumans() }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</x-app-layout>
