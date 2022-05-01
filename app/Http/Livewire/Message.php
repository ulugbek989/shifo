<?php

namespace App\Http\Livewire;

use App\Events\NewMessage;
use App\Models\Post;
use Illuminate\Http\Client\Request;
use Livewire\Component;

class Message extends Component
{
    public $ctn;
    public $userId;


    public function save($id)
    {
        $this->validate([
            'ctn'=>'required|min:3',
        ]);

        \App\Models\Message::create([
            'from_id'=>auth()->id(),
            'to_id'=>$id,
            'text'=>$this->ctn,
        ]);
        $this->cleanVars();
        session()->flash('message','Message added successfully ');

    }
    private function cleanVars()
    {
        $this->ctn=null;
    }
    public function render()
    {

        $users=\App\Models\User::all();
        $user = \App\Models\User::where('id', $this->userId)->first();
        $chats = \App\Models\Message::all();

        return view('livewire.message', [
           'users'=>$users,
            'user'=>$user,
            'chats'=>$chats,
        ]);
    }
}
