<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Matches') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('matches.create') }}" class="text-blue-500 hover:text-blue-700">Add Match</a>

                    @if ($message = Session::get('success'))
                        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded">
                            {{ $message }}
                        </div>
                    @endif

                    <div class="mt-6">
                        <table class="min-w-full bg-white">
                            <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Tournament</th>
                                <th class="py-2 px-4 border-b">Round</th>
                                <th class="py-2 px-4 border-b">Match</th>
                                <th class="py-2 px-4 border-b">Participant 1</th>
                                <th class="py-2 px-4 border-b">Participant 2</th>
                                <th class="py-2 px-4 border-b">Winner</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($matches as $match)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $match->tournament->name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $match->round_number }}</td>
                                    <td class="py-2 px-4 border-b">{{ $match->match_number }}</td>
                                    <td class="py-2 px-4 border-b">{{ $match->participant1->name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $match->participant2->name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $match->winner->name ?? 'TBD' }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <a href="{{ route('matches.show', $match->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                                        <a href="{{ route('matches.edit', $match->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                        <form action="{{ route('matches.destroy', $match->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
