@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="row">
                            <div class="col-md-4"><h5><a href="{{route('bemor.show',$bemor->user->id)}}"><span class="fa fa-arrow-circle-left"></span>Ortga</a></h5></div>
                            <div class="col-md-4 text-center"><h4>{{$bemor->user->name}}</h4></div>

                            <div class="col-md-4 text-right">

                                <a class="btn btn-sm btn-dark" href="{{ route('export',$bemor->id) }}">Export bemor excel
                                    <span class="fa fa-file-excel"></span></a>
                                <a href="{{route('bemor.edit',$bemor->user->id)}}"
                                   class="btn btn-sm btn-warning">
                                    Tashxis qo'shis-<span class="fa fa-edit"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row" style="color: aliceblue">
                            <div class="col-md-4"><img width="200" src="{{asset('storage/'.$bemor->user->avatar)}}"></div>
                            <div class="col-md-4">
                                <b style="float: left;color: #0a0a0a">Bemor:</b><h5>{{$bemor->user->name}}</h5>
                                <b style="color: #0a0a0a; float: left">Tug'ilgan yili:</b><h5>{{$bemor->user->yosh}}</h5>
                                <b style="color: #0a0a0a; float: left">Harorati:</b><h5>{{$bemor->harorat}}</h5>
                            </div>
                            <div class="col-md-4">
                                <b  style="color: #0a0a0a; float: left" >Shikoyati:</b>
                                <h5>
                                    {{$bemor->shikoyat}}
                                </h5>
                            </div>
                        </div>
                            <div class="row d-flex flex-column align-items-center text-center" style="color: aliceblue">
                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Umumiy kurik</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$bemor->kurik}}
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Tashxis</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$bemor->tashxis}}
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Tavsiya</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$bemor->tavsiya}}
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
                                        {{$bemor->Surunkali_kasalliklari}}
                                    </h5>
                                </div>

                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Analiz natijalari</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                       <img width="50%"  src="{{asset('storage/'.$bemor->Analiz_natijalari)}}">
                                    </h5>
                                </div>

                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Davolash usuli</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$bemor->Davolash_usuli}}
                                    </h5>
                                </div>

                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Qabul qilgan dori vositalari</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$bemor->Qabul_qilgan_dori_vositalari}}
                                    </h5>
                                </div>

                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Holatining o’zgarishi</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <h5>
                                        {{$bemor->Holatining_o’zgarishi}}
                                    </h5>
                                </div>


                                <div class="col-md-12">
                                    <h5 style="color: #0a0a0a;" class="text-center">
                                        <b>Vrachlar</b>
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    @foreach($users as $admin)
                                        @if($admin->id==$bemor->author_id)
                                            <h5>
                                                {{$admin->name}}
                                            </h5>
                                        @endif
                                    @endforeach
                                </div>
                        </div>
                        <hr/>
                        @if($bemor->user->tasdiq==false)
                        <div class="col-md-12">
                            <h5 style="color: #0a0a0a;" class="text-center">
                                <b>Bemorning holati</b>

                            </h5>
                        </div>
                        <div class="col-md-12">
                            <h5 style="color: #e3dddd;">
                                Ruxsat yuq
                            </h5>
                        </div>
                        <div class="col-md-12">
                            <h5 style="color: #0a0a0a;" class="text-center">

                                <b>Davolashning tugash sanasi</b>

                            </h5>
                        </div>
                        <div class="col-md-12">
                            <h5 style="color: #e3dddd;">
                                Ruxsat yuq
                            </h5>
                        </div>
                        <div class="col-md-12">
                            <h5 style="color: #0a0a0a;" class="text-center">


                            <b>    Bemor davolangan shifoxona nomini kiritish yoki ro’yxatdan tanlash</b>

                            </h5>
                        </div>
                        <div class="col-md-12">
                            <h5 style="color: #e3dddd;">
                                Ruxsat yuq
                            </h5>
                        </div>
                        <div class="col-md-12">
                            <h5 style="color: #0a0a0a;" class="text-center">
                                <b> Davolovchi shifokorlar</b>
                            </h5>
                        </div>
                        <div class="col-md-12">
                            <h5 style="color: #e3dddd;">
                                Ruxsat yuq
                            </h5>
                        </div>
                        @else
                            <div class="col-md-12">
                                <h5 style="color: #0a0a0a;" class="text-center">
                                    <b>Bemorning holati</b>

                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5 style="color: #e3dddd;">
                                    {{$bemor->Bemorning_holati}}
                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5 style="color: #0a0a0a;" class="text-center">

                                    <b>Davolashning tugash sanasi</b>

                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5 style="color: #e3dddd;">
                                    {{$bemor->Davolashning_tugash_sanasi}}
                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5 style="color: #0a0a0a;" class="text-center">


                                    <b>    Bemor davolangan shifoxona nomini kiritish yoki ro’yxatdan tanlash</b>

                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5 style="color: #e3dddd;">
                                    {{$bemor->Bemor_davolangan}}
                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5 style="color: #0a0a0a;" class="text-center">
                                    <b> Davolovchi shifokorlar</b>
                                </h5>
                            </div>
                            <div class="col-md-12">
                                <h5 style="color: #e3dddd;">
                                    {{$bemor->Davolovchi_shifokorlar}}
                                </h5>
                            </div>
                        @endif
                        <hr>
                            <div class="row">
                                @foreach($users as $admin)
                                    @foreach($admin->bemorlar as $bemor1)
                                        @if($bemor1->user_id==$bemor->user_id)
                                            @if($bemor1->id!=$bemor->id)
                                            <div class="col-md-4 text-center">
                                                <a class="btn btn-outline-success" href="{{route('bemor.show',$bemor1->id)}}">
                                                    @foreach($users as $admin)
                                                    @if($admin->id==$bemor1->author_id)
                                                    <img width="150" src="/images/{{$admin->avatar}}">
                                                    <p style="color: #efecec">{{$admin->name}}</p>
                                                    @endif
                                                    @endforeach
                                                    <p style="color: #efecec">{{Illuminate\Support\Str::limit($bemor1->shikoyat,10)}}</p>
                                                    <p style="color: #efecec">{{Illuminate\Support\Str::limit($bemor1->tavsiya,10)}}</p>
                                                </a>
                                            </div>
                                            @else
                                                <div class="col-md-4 text-center">
                                                    <a class="btn btn-dark" href="{{route('bemor.show',$bemor1->id)}}">
                                                        @foreach($users as $admin)
                                                            @if($admin->id==$bemor1->author_id)
                                                                <img width="150" src="{{asset('storage/'.$admin->avatar)}}">
                                                                <p style="color: #efecec">{{$admin->name}}</p>
                                                            @endif
                                                        @endforeach
                                                        <p style="color: #efecec">{{Illuminate\Support\Str::limit($bemor1->shikoyat,10)}}</p>
                                                        <p style="color: #efecec">{{Illuminate\Support\Str::limit($bemor1->tavsiya,10)}}</p>
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
