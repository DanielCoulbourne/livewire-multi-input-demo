<?php

namespace App\Http\Livewire;

use App\Models\Message as MessageModel;
use Livewire\Component;

class Message extends Component
{
    public $message;

    public $rules = [
        'message.title' => 'string',
        'message.body' => 'string',
        'message.recipients' => 'array',
        'message.recipients.*' => 'email',
    ];

    public function save()
    {
        $this->message->recipients = $this->message->recipients->filter(fn ($val) => $val !== '')->values();
        $this->message->save();
    }

    public function mount(MessageModel $message)
    {
        $this->message = $message ?? MessageModel::make();
    }
}
