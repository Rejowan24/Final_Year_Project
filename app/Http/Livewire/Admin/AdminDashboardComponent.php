<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ChatBox;

class AdminDashboardComponent extends Component
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
        return view('livewire.admin.admin-dashboard-component',['receiver'=>$receiver])->layout('layouts.master');
    }
}
