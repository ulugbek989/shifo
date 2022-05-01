@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="row">
                            <div class="col-md-5 text-left">
                                <h5><a href="{{route('userVaraqa')}}"><span class="fa fa-arrow-circle-left"></span>Ortga</a></h5>
                            </div>
                            <div class="col-md-7 text-left">
                                <h5>{{$user->user->name}}</h5>
                            </div>
                        </div>
                    </div>
                        <div class="card-body">
                            <div class="row" style="color: aliceblue">
                                <div class="col-md-4"><img width="200" src="{{asset('storage/'.$user->user->avatar)}}"></div>
                                <div class="col-md-4">
                                    <b style="float: left;color: #0a0a0a">Bemor:</b><h5>{{$user->user->name}} {{$user->user->familya}} {{$user->user->sharif}}</h5>
                                    <b style="color: #0a0a0a; float: left">Tug'ilgan yili:</b><h5>{{$user->user->yosh}}</h5>
                                    <b style="color: #0a0a0a; float: left">Harorati:</b><h5>{{$user->harorat}}</h5>
                                </div>
                                <div class="col-md-4">
                                    <b  style="color: #0a0a0a; float: left" >Shikoyati:</b>
                                    <h5>
                                    {{$user->shikoyat}}
                                    </h5>
                                </div>
                            </div>
                            <div class="row" style="color: aliceblue">
                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Umumiy kurik</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$user->kurik}}
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Tashxis</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$user->tashxis}}
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Tavsiya</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$user->tavsiya}}
                                    </h5>
                                </div>
                                <hr width="100%">
                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Surunkali kasalliklari</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$user->Surunkali_kasalliklari}}
                                    </h5>
                                </div> <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Analiz natijalari</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                       <img width="50%" src="{{asset('storage/'.$user->Analiz_natijalari)}}" >
                                    </h5>
                                </div> <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Davolash usuli</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$user->Davolash_usuli}}
                                    </h5>
                                </div> <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Qabul qilgan dori vositalari</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$user->Qabul_qilgan_dori_vositalari}}
                                    </h5>
                                </div> <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Holatining o’zgarishi</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$user->Holatining_o’zgarishi}}
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Vrachlar</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    @foreach($users as $admin)
                                        @if($admin->id==$user->author_id)
                                            <h5>
                                                {{$admin->name}}
                                            </h5>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <hr/>
                            @if($user->user->tasdiq==false)
                                <form method="post" action="{{route('swap')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$user->user['id']}}">
                                    <input type="hidden" name="name" value="{{$user->user['name']}}">
                                    <input type="hidden" name="familya" value="{{$user->user['familya']}}">
                                    <input type="hidden" name="sharif" value="{{$user->user['sharif']}}">
                                    <input type="hidden" name="yosh" value="{{$user->user['yosh']}}">
                                    <input type="hidden" name="jins" value="{{$user->user['jins']}}">
                                    <input type="hidden" name="email" value="{{$user->user['email']}}">
                                    <input type="hidden" name="password" value="{{$user->user['password']}}">

                                    <button name="tasdiq" class="btn btn-success">
                                        <span class="price">Shifokor ko'rishiga ruxsat berish</span>
                                    </button>
                                </form>
                            @else
                                <form method="post" action="{{route('swapfalse')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$user->user['id']}}">
                                    <input type="hidden" name="name" value="{{$user->user['name']}}">
                                    <input type="hidden" name="familya" value="{{$user->user['familya']}}">
                                    <input type="hidden" name="sharif" value="{{$user->user['sharif']}}">
                                    <input type="hidden" name="yosh" value="{{$user->user['yosh']}}">
                                    <input type="hidden" name="jins" value="{{$user->user['jins']}}">
                                    <input type="hidden" name="email" value="{{$user->user['email']}}">
                                    <input type="hidden" name="password" value="{{$user->user['password']}}">

                                    <button name="tasdiq" class="btn btn-danger">
                                        <span class="price">Shifokor ko'rishiga ruxsat olib tashlash</span>
                                    </button>
                                </form>
                            @endif
                            <div class="col-md-12">
                                <h5 style="color: #0a0a0a;" class="text-center">
                                    <b>Bemorning holati</b>
                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5>
                                    {{$user->Bemorning_holati}}
                                </h5>
                            </div><div class="col-md-12">
                                <h5 style="color: #0a0a0a;" class="text-center">
                                    <b>Davolashning tugash sanasi</b>
                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5>
                                    {{$user->Davolashning_tugash_sanasi}}
                                </h5>
                            </div><div class="col-md-12">
                                <h5 style="color: #0a0a0a;" class="text-center">
                                    <b>Bemor davolangan</b>
                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5>
                                    {{$user->Bemor_davolangan}}
                                </h5>
                            </div><div class="col-md-12">
                                <h5 style="color: #0a0a0a;" class="text-center">
                                    <b>Davolovchi shifokorlar</b>
                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5>
                                    {{$user->Davolovchi_shifokorlar}}
                                </h5>
                            </div>
                            <hr/>
                            <div class="row">
                                @foreach($users as $admin)
                                    @foreach($admin->bemorlar as $bemor1)
                                        @if($bemor1->user_id==$user->user_id)
                                            @if($bemor1->id!=$user->id)
                                                <div class="col-md-4 text-center">
                                                    <a class="btn btn-outline-success" href="{{route('userVaraqaId',$bemor1->id)}}">
                                                        @foreach($users as $admin)
                                                            @if($admin->id==$bemor1->author_id)
                                                                <img width="150" src="/images/{{$admin->avatar}}">
                                                                <p style="color: #efecec">{{$admin->name}}</p>
                                                            @endif
                                                        @endforeach
                                                        <p style="color: #efecec">{{Illuminate\Support\Str::limit($user->shikoyat,10)}}</p>
                                                        <p style="color: #efecec">{{Illuminate\Support\Str::limit($user->tavsiya,10)}}</p>
                                                    </a>
                                                </div>
                                            @else
                                                <div class="col-md-4 text-center">
                                                    <a class="btn btn-dark" href="{{route('userVaraqaId',$user->id)}}">
                                                        @foreach($users as $admin)
                                                            @if($admin->id==$bemor1->author_id)
                                                                <img width="150" src="{{asset('storage/'.$admin->avatar)}}">
                                                                <p style="color: #efecec">{{$admin->name}}</p>
                                                            @endif
                                                        @endforeach
                                                        <p style="color: #efecec">{{Illuminate\Support\Str::limit($user->shikoyat,10)}}</p>
                                                        <p style="color: #efecec">{{Illuminate\Support\Str::limit($user->tavsiya,10)}}</p>
                                                    </a>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>

                        </div>

                </div>
            </div>
        </div>
    </div>

@endsection
