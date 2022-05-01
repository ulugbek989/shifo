<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class LoadMore extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $amount=2;
    public function render()
    {
        $post = \App\Models\Comment::latest()->paginate($this->amount);

        return view('livewire.load-more',compact('post'));
    }
    public function loadMore()
    {
        $this->amount+=1;
    }
}
