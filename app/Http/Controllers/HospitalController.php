<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Contact;
use App\Models\Hospital;
use App\Models\Konsultatsiya;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Telegram\Bot\Laravel\Facades\Telegram;

class HospitalController extends Controller
{


    public function pp(){
        $posts=Post::all();

        return view('postView',compact('posts'));
    }
    public function getTeacherIdPost($post){
        $post=Post::find($post);
        return view('postView',compact('post'));
    }
    public function index()
    {
        $posts=Post::all();
        $users=User::all();
        return view('site.index',compact('posts','users'));
    }
  
   
    public function commentEdit(Request $request,$post)
    {
        $this->validate($request,[
            'comment' =>'required|min:3'
        ]);
        $teacher=new Comment();
        $teacher->content=$request->comment;
        $teacher->user_id=Auth::id();
        $teacher->post_id=$post;
        $teacher->save();
        return back();
    }
    
    
  
    public function deleteTeacher($id)
    {
        $teacher=Hospital::find($id);
        $teacher->delete();
        return response()->json(['success'=>'Record has been deleted']);
    }
    public function sendToTg(Request $request) {
        $this->validate($request,
            ['phone' => 'required|min:8'],
            ['name' => 'required'],
        );
        $contact=new Contact();
        $contact->name=$request->name;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->kasallik=$request->kasallik;
        $contact->message=$request->message;
        $contact->save();

        Telegram::sendMessage([
            'chat_id' => env('1001618170071', '-1001618170071'),
            'parse_mode' => 'HTML',
            'text' => "<b>Contact</b>\n"
                . "\n"
                . "<b>Имя клиента</b>: $request->name\n"
                . "<b>Тел номер</b>: $request->phone\n"
                . "<b>Почта</b>: $request->email\n"
                . "<b>Болезнь</b>: $request->kasallik\n"
                . "<b>Сообщение</b>: $request->message\n"

        ]);
        return redirect()->back();
    }

    public function sendToTg1(Request $request) {
        $this->validate($request,
            ['phone' => 'required|min:8'],
            ['name' => 'required'],
        );
        $contact=new Konsultatsiya();
        $contact->name=$request->name;
        $contact->surname=$request->surname;
        $contact->section=$request->section;
        $contact->phone=$request->phone;
        $contact->day=$request->day;
        $contact->message=$request->message;
        $contact->save();

        Telegram::sendMessage([
            'chat_id' => env('1001579112554', '-1001579112554'),
            'parse_mode' => 'HTML',
            'text' => "<b>Konsultatsiya</b>\n"
                . "\n"
                . "<b>Имя клиента</b>: $request->name\n"
                . "<b>Фамиля клиента</b>: $request->surname\n"
                . "<b>Раздел</b>: $request->section\n"
                . "<b>Тел номер</b>: $request->phone\n"
                . "<b>Ден</b>: $request->day\n"
                . "<b>Сообщение</b>: $request->message\n"

        ]);
        return redirect()->back();
    }
}
