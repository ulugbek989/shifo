<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Comment extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    protected $listeners=[
        'refreshParent'=>'$refresh'
    ];

    public $amounts=8;
    public function render()
    {

        $posts = \App\Models\Post::latest()->paginate($this->amounts);
        return view('livewire.comment', [
            'posts' => $posts
        ]);
    }
    public function loadMores()
    {
        $this->amounts+=1;
    }
}
