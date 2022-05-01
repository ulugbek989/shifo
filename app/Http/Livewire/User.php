<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{
    public $listeners = [
        'echo:presence-chat,NewUser' => '$refresh',
        'update' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.user', [
            'user'  => auth()->user(),
            'users' => \App\Models\User::where('id', '!=', auth()->id())->get(),
        ]);
    }
}
