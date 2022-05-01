<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('checkRole:admin');
    }

    public function index()
    {
        $users=User::all();
        return view('admin.users.user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        if(Auth::id()!=$id){
            $user=User::where('id',$id)->first();}
            else{
                return redirect()->back();
    
            }
            return view('admin.users.editUser',compact('user'));
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
        $user=User::where('id',$id)->first();
        $user->name=$request['name'];
        $user->email=$request['email'];
        if ($request['author']==1)
        {
            $user->author=true;
        }
        else
        {
            $user->author=false;

        }
        if ($request['admin']==1)
        {
            $user->admin=true;
        }
        else
        {
            $user->admin=false;

        }
        $user->save();
        return back()->with('success','User Update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $us=User::where('id',$id)->first();
        $us->delete();
        return back()->with('success','User delete');
    }



    public function online()
    {
        $users=User::all();
        return view('admin.users.online',compact('users'));
    }
    public function detail(User $user)
    {
        return view('admin.users.online',compact('user'));
    }
}
