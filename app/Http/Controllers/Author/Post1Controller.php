<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Post1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('checkRole:author');
    }

    public function index()
    {
        $posts=Post::where('user_id',Auth::id())->get();
        return view('author.posts.posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post=Post::all();
        return view('author.posts.addPost',compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid=$request->validate([
            'title'=>['string','nullable'],
            'ctn'=>['string','nullable'],
        ]);
        if($valid) {
            $post=new Post();
            $post->title=$request->title;
            $post->ctn=$request->ctn;
            $post->user_id=Auth::id();
            if ($request->hasFile('img')) {
                $request->validate([
                    'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,ico',
                ]);

                $imageName =\request()->img->store('post', 'public');

                $post->update([
                    'img' => \request()->img->store('post', 'public'),
                ]);
                $post->img=$imageName;
            }
            $post->save();}
            return back()->with('success','Post in Creating');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::where('id',$id)->where('user_id',Auth::id())->first();
        return view('author.posts.postEdit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid=$request->validate([
            'title'=>['string','nullable'],
            'ctn'=>['string','nullable'],
        ]);
        if($valid){
        $post=Post::where('id',$id)->where('user_id', Auth::id())->first();
        $post->title=$request['title'];
        $post->ctn=$request['ctn'];
        if ($request->hasFile('img')) {
            $request->validate([
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,ico',
            ]);
            $imageName = \request()->img->store('post', 'public');
            $post->update([
                'img' => \request()->img->store('post', 'public'),
            ]);
            $post->img = $imageName;
        }
        $post->save();}
        return back()->with('success','Post in Editing');

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::where('id',$id)->where('user_id',Auth::id())->delete();
        return back()->with('success','Post deleted');
    }
}
