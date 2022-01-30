<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ChatBox;

class CricketComponent extends Component
{
    public $sender;

    public function resetInputfields()
    {
        $this->sender = '';
    }

    public function addmessage()
    {
        $message = new ChatBox;
        $message->message = $this->sender;
        $message->save();
        $this->resetInputfields();
    }

    public function render()
    {
        $receiver = ChatBox::all();
        return view('livewire.cricket-component',['receiver'=>$receiver])->layout('layouts.master');
    }
}
