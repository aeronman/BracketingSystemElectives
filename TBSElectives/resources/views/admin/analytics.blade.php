<!-- resources/views/analytics.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Analytics') }}

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Replace with your analytics content -->
                <h3 class="text-lg font-semibold mb-4">Monthly User Activity</h3>
                <div id="userActivityChart" style="height: 300px;"></div>

                <h3 class="text-lg font-semibold mt-8 mb-4">Top Pages Visited</h3>
                <ul class="list-disc list-inside">
                    <li>Page A - 500 visits</li>
                    <li>Page B - 420 visits</li>
                    <li>Page C - 300 visits</li>
                    <!-- Replace with dynamic data if available -->
                </ul>

                <!-- Add more analytics data as needed -->
            </div>
        </div>
    </div>
</x-app-layout>
