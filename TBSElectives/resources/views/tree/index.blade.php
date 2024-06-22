<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tournament Tree') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($groupedMatches as $round => $matches)
                        <h3 class="text-lg font-bold mb-4">Round {{ $round }}</h3>
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($matches as $match)
                                <div class="border border-gray-300 rounded-md p-4">
                                    <p><strong>Match {{ $match->match_number }}</strong></p>
                                    <p>{{ $match->participant1->name }} vs {{ $match->participant2->name }}</p>
                                    <p>Winner: {{ $match->winner->name ?? 'TBD' }}</p>
                                </div>
                            @endforeach
                        </div>
                        <hr class="my-6">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
