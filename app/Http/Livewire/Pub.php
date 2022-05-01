<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Pub extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $amount=6;
    public $title;

    public function render()
    {
        $pubs = Post::latest()->paginate($this->amount);

        return view('livewire.pub', [
            'pubs'  => $pubs
        ]);
    }
    public function save()
    {

        $this->validate([
            'title' => 'required|min:3'
        ]);
        \App\Models\Comment::create([
            'user_id' => auth()->id(),
            'post_id' => '2',
            'content' => $this->title

        ]);
        $this->cleanVars();
        session()->flash('message', 'Comment added successfully ');
    }


    private function cleanVars()
    {
        $this->title=null;
    }

    public function loadMore()
    {
        $this->amount+=6;
    }

}
