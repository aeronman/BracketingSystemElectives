<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Match') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('matches.update', $match->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="tournament_id" class="block text-gray-700">Tournament:</label>
                            <select name="tournament_id" id="tournament_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @foreach ($tournaments as $tournament)
                                    <option value="{{ $tournament->id }}" @if($tournament->id == $match->tournament_id) selected @endif>{{ $tournament->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="round_number" class="block text-gray-700">Round Number:</label>
                            <input type="number" name="round_number" id="round_number" value="{{ old('round_number', $match->round_number) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="match_number" class="block text-gray-700">Match Number:</label>
                            <input type="number" name="match_number" id="match_number" value="{{ old('match_number', $match->match_number) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="participant1_id" class="block text-gray-700">Participant 1:</label>
                            <select name="participant1_id" id="participant1_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @foreach ($participants as $participant)
                                    <option value="{{ $participant->id }}" @if($participant->id == $match->participant1_id) selected @endif>{{ $participant->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="participant2_id" class="block text-gray-700">Participant 2:</label>
                            <select name="participant2_id" id="participant2_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @foreach ($participants as $participant)
                                    <option value="{{ $participant->id }}" @if($participant->id == $match->participant2_id) selected @endif>{{ $participant->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="winner_id" class="block text-gray-700">Winner:</label>
                            <select name="winner_id" id="winner_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                <option value="">TBD</option>
                                @foreach ($participants as $participant)
                                    <option value="{{ $participant->id }}" @if($participant->id == $match->winner_id) selected @endif>{{ $participant->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update Match</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
