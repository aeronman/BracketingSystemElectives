<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Participant') }}
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

                    <form action="{{ route('participants.update', $participant->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700">Name:</label>
                            <input type="text" name="name" id="name" value="{{ old('name', $participant->name) }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                        </div>
                        <div class="mb-4">
                            <label for="tournament_id" class="block text-gray-700">Tournament:</label>
                            <select name="tournament_id" id="tournament_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                                @foreach ($tournaments as $tournament)
                                    <option value="{{ $tournament->id }}" {{ $tournament->id == $participant->tournament_id ? 'selected' : '' }}>
                                        {{ $tournament->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-700">Update Participant</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
