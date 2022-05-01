<?php

namespace App\Http\Livewire;
use App\Models\Post;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $action;
    public $selectItem;
    protected $listeners=[
      'refreshParent'=>'$refresh'
    ];
    public function update()
    {

    }
    public function delete($id)
    {
            $posts=Post::find($id);
            $posts->delete();
            session()->flash('message','Post deleted successfully ');

    }

    public function render()
    {

        return view('livewire.posts',[
            'posts'=>Post::where('user_id','=',auth()->user()->id)->latest()->paginate(4)
        ]);
    }
}
