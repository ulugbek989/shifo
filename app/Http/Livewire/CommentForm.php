<?php

namespace App\Http\Livewire;

use App\Comment;
use App\Models\Post;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CommentForm extends Component
{
    public $title;

    public $postId;




    public function save()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            $this->validate([
                'title' => 'required'
            ]);
            \App\Models\Comment::create([
                'user_id' => auth()->id(),
                'post_id' => $post->id,
                'content' => $this->title

            ]);
            $this->cleanVars();
            $this->emit('refreshParent');
            session()->flash('message', 'Comment added successfully ');
        }

    }
    private function cleanVars()
    {
        $this->title=null;
    }

    public function render()
    {
    $posts=Post::all();
        return view('livewire.comment-form',['posts'=>$posts]);
    }
}
