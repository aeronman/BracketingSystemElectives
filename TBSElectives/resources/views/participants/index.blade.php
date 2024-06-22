<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Participants') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('participants.create') }}" class="text-blue-500 hover:text-blue-700">Add Participant</a>

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
                                <th class="py-2 px-4 border-b">Tournament</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($participants as $participant)
                                <tr>
                                    <td class="py-2 px-4 border-b">{{ $participant->name }}</td>
                                    <td class="py-2 px-4 border-b">{{ $participant->tournament->name }}</td>
                                    <td class="py-2 px-4 border-b">
                                        <a href="{{ route('participants.show', $participant->id) }}" class="text-blue-500 hover:text-blue-700">View</a>
                                        <a href="{{ route('participants.edit', $participant->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                        <form action="{{ route('participants.destroy', $participant->id) }}" method="POST" class="inline">
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
