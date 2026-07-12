<x-app-layout>

    <!-- Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white p-4 rounded shadow-sm border border-gray-100">
            <div class="text-xs text-gray-500">Total Sales</div>
            <div class="text-2xl font-semibold">$12,432</div>
            <div class="text-sm text-gray-400 mt-1">+4.5% vs last month</div>
        </div>
        <div class="bg-white p-4 rounded shadow-sm border border-gray-100">
            <div class="text-xs text-gray-500">New Users</div>
            <div class="text-2xl font-semibold">1,243</div>
            <div class="text-sm text-gray-400 mt-1">Active this week</div>
        </div>
        <div class="bg-white p-4 rounded shadow-sm border border-gray-100">
            <div class="text-xs text-gray-500">Orders</div>
            <div class="text-2xl font-semibold">3,245</div>
            <div class="text-sm text-gray-400 mt-1">Pending: 32</div>
        </div>
        <div class="bg-white p-4 rounded shadow-sm border border-gray-100">
            <div class="text-xs text-gray-500">Bounce</div>
            <div class="text-2xl font-semibold">23%</div>
            <div class="text-sm text-gray-400 mt-1">Improving</div>
        </div>
    </div>

    <!-- Responsive table / list -->
    <section class="bg-white rounded shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex items-center justify-between">
            <h2 class="text-lg font-semibold">Recent Transactions</h2>
            <div class="text-sm text-gray-500">Showing 10 entries</div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead class="bg-gray-50 text-left">
                    <tr>
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Customer</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Amount</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    <tr>
                        <td class="px-4 py-3">#1243</td>
                        <td class="px-4 py-3">Jane Doe</td>
                        <td class="px-4 py-3">2025-11-29</td>
                        <td class="px-4 py-3">$320.00</td>
                        <td class="px-4 py-3"><span
                                class="px-2 py-1 rounded-full text-xs bg-green-50 text-green-600">Completed</span>
                        </td>
                        <td class="px-4 py-3">View</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3">#1242</td>
                        <td class="px-4 py-3">Company X</td>
                        <td class="px-4 py-3">2025-11-28</td>
                        <td class="px-4 py-3">$1,200.00</td>
                        <td class="px-4 py-3"><span
                                class="px-2 py-1 rounded-full text-xs bg-yellow-50 text-yellow-600">Pending</span>
                        </td>
                        <td class="px-4 py-3">View</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Mobile friendly list as fallback --- visible by default on very narrow screens -->
        <div class="md:hidden p-4">
            <div class="space-y-3">
                <div class="bg-gray-50 p-3 rounded">
                    <div class="flex items-center justify-between">
                        <div class="font-medium">#1243</div>
                        <div class="text-sm text-gray-500">$320</div>
                    </div>
                    <div class="text-sm text-gray-500">Jane Doe • 2025-11-29</div>
                    <div class="mt-2 text-xs text-green-700">Completed</div>
                </div>
                <div class="bg-gray-50 p-3 rounded">
                    <div class="flex items-center justify-between">
                        <div class="font-medium">#1242</div>
                        <div class="text-sm text-gray-500">$1,200</div>
                    </div>
                    <div class="text-sm text-gray-500">Company X • 2025-11-28</div>
                    <div class="mt-2 text-xs text-yellow-700">Pending</div>
                </div>
            </div>
        </div>

        <div class="p-4 border-t text-sm text-gray-500">Show more — pagination placeholder</div>
    </section>
</x-app-layout>
