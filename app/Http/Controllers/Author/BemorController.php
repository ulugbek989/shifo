<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Bemorlar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BemorController extends Controller
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
        
        $bemorlar=User::all();
        return view('author.bemorlar.bemor',compact('bemorlar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        
        $bemor=Bemorlar::where('id',$id)->first();
        $user=User::find($id);
        $users=User::all();
        $bemorla=Bemorlar::all();

        return view('author.bemorlar.bemorId',compact('bemor','users','bemorla','user'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bemor=User::where('id',$id)->first();
        return view('author.bemorlar.bemorEdit',compact('bemor'));
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
        $bemor=new Bemorlar();
        $bemor->user_id=$id;
        $bemor->author_id=Auth::id();
        $bemor->harorat=$request['harorat'];
        $bemor->shikoyat=$request['shikoyat'];
        $bemor->kurik=$request['kurik'];
        $bemor->tashxis=$request['tashxis'];
        $bemor->tavsiya=$request['tavsiya'];
        $bemor->Surunkali_kasalliklari=$request['Surunkali_kasalliklari'];
        if ($request->hasFile('Analiz_natijalari')) {
            $request->validate([
                'Analiz_natijalari' => 'required|image|mimes:jpeg,png,jpg,gif,svg,ico',
            ]);
            $imageName = \request()->Analiz_natijalari->store('Analiz_natijalari', 'public');
            $bemor->update([
                'Analiz_natijalari' => \request()->Analiz_natijalari->store('Analiz_natijalari', 'public'),
            ]);
            $bemor->Analiz_natijalari = $imageName;
        }
        $bemor->Davolash_usuli=$request['Davolash_usuli'];
            $bemor->Qabul_qilgan_dori_vositalari=$request['Qabul_qilgan_dori_vositalari'];
        $bemor->Holatining_o’zgarishi=$request['Holatining_o’zgarishi'];
        $bemor->Bemorning_holati=$request['Bemorning_holati'];
        $bemor->Davolashning_tugash_sanasi=$request['Davolashning_tugash_sanasi'];
        $bemor->Bemor_davolangan=$request['Bemor_davolangan'];
        $bemor->Davolovchi_shifokorlar=$request['Davolovchi_shifokorlar'];
        $bemor->save();
        return back()->with('success','Tashxis quyildi');
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
