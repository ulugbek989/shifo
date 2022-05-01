<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Doctor extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $count=0;
    public function load()
    {
        $this->count+=4;
    }

    public function render()
    {
        $pubs=\App\Models\User::latest()->paginate($this->count);
        return view('livewire.doctor',[
            'pubs'=>$pubs
        ]);
    }
}
