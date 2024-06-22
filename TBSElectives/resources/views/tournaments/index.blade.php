<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tournaments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('tournaments.create') }}" class="text-blue-500 hover:text-blue-700">Add Tournament</a>

                    @if ($message = Session::get('success'))
                        <div class="mt-4 p-4 bg-green-100 text-green-700 rounded">
                            {{ $message }}
                        </div>
                    @endif

                    <div class="mt-6">
                        <table class="min-w-full bg-white">
                            <thead>
                            <tr>
                                <th class="py-2 px-4 border-b">Name</th>
                                <th class="py-2 px-4 border-b">Description</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($tournaments as $tournament)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $tournament->name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $tournament->description }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <a href="{{ route('tournaments.show', $tournament->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                                        <a href="{{ route('tournaments.edit', $tournament->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                        <form action="{{ route('tournaments.destroy', $tournament->id) }}" method="POST" class="inline">
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
