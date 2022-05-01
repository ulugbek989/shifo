<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostForm extends Component
{

    public $content;
    public $title;
    public function save()
    {
        $this->validate([
            'title'=>'required|min:3',
            'content'=>'required|min:3',
        ]);
        Post::create([
            'user_id'=>auth()->id(),
            'title'=>$this->title,
            'ctn'=>$this->content,
        ]);
        $this->cleanVars();
        $this->emit('refreshParent');
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('message','Post added successfully ');

    }
    private function cleanVars()
    {
        $this->title=null;
        $this->content=null;
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
