<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdate;
use App\Models\Contact;
use App\Models\Konsultatsiya;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
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
        $users = User::all();
        $i=0;
        foreach ($users as $user){

            if ($user->author==true){
               $i++;
            }

            }
        $s=$i;
        return view('admin.dashboard',compact('s'));
    }
    public function profile(){
        return view('admin.profile.profile');
        }
    public function profilePost(UserUpdate $request)
    {
        $user=Auth::user();
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->save();
        if ($request->hasFile('img')) {
            $request->validate([
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg,ico',
            ]);
            $imageName = \request()->img->store('profile-photos', 'public');
            $user->update([
                'img' => \request()->img->store('profile-photos', 'public'),
            ]);
            $user->avatar = $imageName;
            $user->save();
            return back()
            ->with('success','You have successfully upload image.');
        }  

        if($request['password']!="")
        {
            if (!(Hash::check($request['password'],Auth::user()->password)))
            {
                return  redirect()->back()->with('error',"Your current password does not match with the password yor provided");
            }

            if (strcmp($request['password'],$request['new_password'])==0)
            {
                return redirect()->back()->with('error',"New password cannot be sam as your current password");
            }
            $validation=$request->validate([
                'password'=>'required',
                'new_password'=>'required|string|min:6|confirmed'
            ]);
            $user->password=bcrypt($request['new_password']);
            $user->save();
            return redirect()->back()->with('success',"Password changed successfully");
        }

        return back()->with('success','user in successfully create');

    }

    public function contact(){
        $contacts=Contact::all();
        return view('tg.dashboard', compact('contacts'));
    }
    public function konsultatsiya(){
        $konsultatsiyalar=Konsultatsiya::all();
        return view('tg.dashboard1',compact('konsultatsiyalar'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
