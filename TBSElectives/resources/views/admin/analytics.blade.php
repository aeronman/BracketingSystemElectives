<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tournament Bracketing Analytics') }}
        </h2>
    </x-slot>
    <!-- for Graphics Charts etc. -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Replace with your analytics content -->

                <!-- Shows Overall Stats -->
                <h3 class="text-lg font-semibold mb-4">Overall Tournament Stats</h3>
                <canvas id="tournamentStatsChart" style="height: 300px;"></canvas>

                <!-- Shows Number of Match Stats -->
                <h3 class="text-lg font-semibold mt-8 mb-4">Number of Matches Per Round</h3>
                <canvas id="matchesPerRoundChart" style="height: 300px;"></canvas>

                <!-- Shows list of Player Performance -->
                <h3 class="text-lg font-semibold mt-8 mb-4">Player Performance</h3>
                <canvas id="playerPerformanceChart" style="height: 300px;"></canvas>

                <ul class="list-disc list-inside">
                    <li>Player A - 10 wins, 2 losses</li>
                    <li>Player B - 8 wins, 4 losses</li>
                    <li>Player C - 6 wins, 6 losses</li>
                    <!-- Replace with dynamic data if available -->
                </ul>

                <!-- Shows Top Scoring Each Player -->
                <h3 class="text-lg font-semibold mt-8 mb-4">Top Scorers</h3>
                <ul class="list-disc list-inside">
                    <li>Player A - 150 points</li>
                    <li>Player B - 130 points</li>
                    <li>Player C - 120 points</li>
                    <!-- Replace with dynamic data if available -->
                </ul>

                <!-- Shows Highest Viewed Maches -->
                <h3 class="text-lg font-semibold mt-8 mb-4">Most Viewed Matches</h3>
                <ul class="list-disc list-inside">
                    <li>Match 1: Player A vs Player B - 1000 views</li>
                    <li>Match 2: Player C vs Player D - 850 views</li>
                    <li>Match 3: Player E vs Player F - 700 views</li>
                    <!-- Replace with dynamic data if available -->
                </ul>

                <!-- Add more analytics data as needed -->
            </div>
        </div>
    </div>

    <!-- to get Graphic Chart, Pie or Line -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('tournamentStatsChart').getContext('2d');
            var tournamentStatsChart = new Chart(ctx, {
                type: 'bar', // or 'line', 'pie', etc.
                data: {
                    labels: ['Total Matches', 'Total Players', 'Total Points', 'Average Points per Match'],
                    datasets: [{
                        label: 'Tournament Stats',
                        data: [150, 20, 2000, 13.3], // Example data
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(153, 102, 255, 0.2)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(153, 102, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            var ctxMatches = document.getElementById('matchesPerRoundChart').getContext('2d');
            var matchesPerRoundChart = new Chart(ctxMatches, {
                type: 'line',
                data: {
                    labels: ['Round 1', 'Round 2', 'Quarter Finals', 'Semi Finals', 'Finals'],
                    datasets: [{
                        label: 'Matches Per Round',
                        data: [16, 8, 4, 2, 1], // Example data
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });

        var ctxMatches = document.getElementById('playerPerformance').getContext('2d');
        var matchesPerRoundChart = new Chart(ctxMatches, {
            type: 'line',
            data: {
                labels: ['Player A', 'Player B', 'Player C'],
                datasets: [{
                    label: 'Player Performance',
                    data: [16, 8, 4, 2, 1], // Example data
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-app-layout>
