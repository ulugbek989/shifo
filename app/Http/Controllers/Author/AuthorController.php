<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdate;
use App\Models\Bemorlar;
use App\Models\Contact;
use App\Models\Konsultatsiya;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthorController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('checkRole:author');
    }
    public function index()
    {
        $users=User::all();
        return view('author.dashboard',compact('users'));
    }

    public function profile(){
        return view('author.profile.profile');
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
    public function detail($id){
        $bemor=Bemorlar::where('id',$id)->first();
        $user=User::find($id);
        $users=User::all();
        $bemorla=Bemorlar::all();

        return view('author.bemorlar.bemorDetail',compact('bemor','users','bemorla','user'));
    }
    public function contact(){
        $contacts=Contact::all();
        return view('tg.dashboard', compact('contacts'));
    }
    public function konsultatsiya(){
        $konsultatsiyalar=Konsultatsiya::all();
        return view('tg.dashboard1',compact('konsultatsiyalar'));
    }
}
