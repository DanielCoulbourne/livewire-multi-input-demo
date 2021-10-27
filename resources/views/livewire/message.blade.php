<div class="pt-4">
    <label class="flex flex-col text-gray-300 mb-4">
        Title
        <input wire:model="message.title" class="bg-gray-600 border border-gray-900 p-2 outline-none rounded mt-2" />
    </label>

    <label class="flex flex-col text-gray-300 mb-4">
        Recipients
        @if($message->recipients?->count())
            @foreach($message->recipients as $index => $recipient)
                <input wire:model="message.recipients.{{$index}}"
                    wire:key="recipient-{{$index}}"
                    class="block w-full bg-gray-600 border border-gray-900 p-2 outline-none rounded mb-1" />
            @endforeach
        @endif

        <div class="flex flex-row items-center justify-center mt-2">
            <input wire:model.defer="message.recipients.{{ $message->recipients?->count() ?? 0 }}"
                    wire:key="recipient-{{ $message->recipients?->count() ?? 0 }}"
                    class="block w-full bg-gray-600 border border-gray-900 p-2 outline-none rounded" />
            <button wire:click="$refresh()" class="p-2 bg-purple-600 text-white border border-purple-900 rounded flex-shrink-0 ml-2">+ Add</button>
        </div>
    </label>

    <label class="flex flex-col text-gray-300 mb-4"> 
        Body
        <textarea wire:model="message.body" class="bg-gray-600 border border-gray-900 p-2 outline-none rounded mt-2"></textarea>
    </label>

    <button wire:click="save" :disabled="$message->isDirty()" class="p-2 bg-purple-600 text-white border border-purple-900 rounded block w-full mt-8">
        Save 
        <span wire:loading.delay>...</span>
    </button>
</div>
