<?php

namespace App\Http\Controllers\User;

use App\Models\Bemorlar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User2Controller extends Controller
{
    public function profile(){
        $users=User::all();

        return view('user.profile',compact('users'));
    }
    public function tarix()
    {
        $users=User::all();
        return view('user.kasallikVaraqa',compact('users'));
    }
    public function tarixId($id)
    {
        $user=Bemorlar::find($id);
        $users=User::all();
        $users1=User::all();
        return view('user.kasallikVaraqaId',compact('user','users','users1'));
    }
    public function profilePost(Request $request)
    {
        $user=Auth::user();
        $user->name=$request['name'];
        $user->sharif=$request['sharif'];
        $user->familya=$request['familya'];
        $user->yosh=$request['yosh'];
        $user->jins=$request['jins'];
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
    public function deleteUser($id)
    {
        $us=User::where('id',$id)->first();
        $us->delete();
        return back()->with('success','User deleted');
    }
    public function swap(Request $request){
        $category=User::find($request->id);
        $category->id=$request->id;
        $category->name=$request->name;
        $category->sharif=$request->sharif;
        $category->familya=$request->familya;
        $category->yosh=$request->yosh;
        $category->jins=$request->jins;
        $category->email=$request->email;
        $category->password=$request->password;
        $category->tasdiq=1;
        $category->save();
        return back();
    }
    public function swapfalse(Request $request){
        $category=User::find($request->id);
        $category->id=$request->id;
        $category->name=$request->name;
        $category->sharif=$request->sharif;
        $category->familya=$request->familya;
        $category->yosh=$request->yosh;
        $category->jins=$request->jins;
        $category->email=$request->email;
        $category->password=$request->password;
        $category->tasdiq=0;
        $category->save();
        return back();
    }

}
