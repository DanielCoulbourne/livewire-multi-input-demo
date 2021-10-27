<x-layout>
    <div class="flex flex-col">
        @forelse(App\Models\Message::all() as $message)
            <div class="pt-4 mb-4 flex text-gray-300 mb-4 py-4 border-b border-gray-400">
                <div class="w-full">
                    <h2 class="text-lg">{{ $message->title }}</h2>
                    <p class="text-sm text-gray-500">{{ $message->recipients?->join(', ') ?? 'No Recipients' }}</p>
                </div>
                <a href="{{ route('messages.edit', $message) }}" class="p-2 bg-purple-600 text-white border border-purple-900 rounded flex-shrink-0 ml-2">Edit</a>
            </div>
        @empty
            <div class="pt-4 mb-4 flex flex-col text-gray-300 mb-4">
                No messages yet.
            </div>
        @endforelse

        <a href="{{ route('messages.create') }}" class="text-center p-2 bg-purple-600 text-white border border-purple-900 rounded flex-shrink-0">New Message</a>
    </div>
</x-layout>
