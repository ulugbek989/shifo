@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Patients
                    </div>


                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr  style="color: #1adddd">
                                    <th class="text-nowrap text"><div class="user_info">Foto</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Name</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Posts</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Comments</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Last visit</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Action</div></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $us)
                                    @if($us->author==true)
                                        @if($us->isOnline())
                                            <tr>
                                        <td>
                                            <a href="{{route('user1.show',$us->id)}}" data-toggle="modal" data-target="#docModal{{ $us->id }}" >
                                                <div class="img_cont">
                                                    <img src="{{asset('storage/'. $us->avatar)}}" class="rounded-circle user_img" alt="">
                                                    <span class="online_icon"></span>
                                                </div>
                                            </a>
                                        </td>
                                        <td  class="text-nowrap text">
                                            <div class="user_info">
                                                <a href="#" >
                                                    <span>{{$us->name}}</span></a>
                                                <p>{{$us->name}}  is online </p>
                                            </div>
                                        </td>
                                        <td class="text-nowrap text"><div class="user_info"><span>{{$us->post->count()}}</span></div></td>
                                        <td class="text-nowrap text"><div class="user_info"><span>{{$us->comment->count()}}</span></div></td>
                                        <td class="text-nowrap text"><div class="user_info"><span>{{\Carbon\Carbon::parse($us->last_sign_in_at)->diffForHumans()}}</span></div></td>
                                            <td>
                                               
                                                <a href="{{route('user1.show',$us->id)}}" class="btn btn-sm btn-info">
                                                    <span class="fa fa-info"></span></a>
                                            </td>
                                    </tr>
                                    <div class="modal fade" id="docModal{{$us->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">User Info</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-md-4"><img width="120" src="{{asset('storage/'.$us->avatar)}}" ></div>
                                                            <div class="col-md-4">
                                                                <h4>{{$us->name}}</h4>
                                                                <h4>Surnames</h4>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h4>Year</h4>
                                                                <h4>Address</h4>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">first</div>
                                                            <div class="col-md-4">second</div>
                                                            <div class="col-md-4">third</div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                        @else
                                            <tr>
                                                <td>
                                                    <a href="{{route('user1.show',$us->id)}}" data-toggle="modal" data-target="#docModal{{ $us->id }}" >
                                                        <div class="img_cont">
                                                            <img src="/images/{{$us->avatar}}" class="rounded-circle user_img " alt="wow">
                                                            <span class="online_icon offline "></span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div class="user_info ">
                                                        {{$us->name}}
                                                        <p>{{$us->name}} is offline</p>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap" >
                                                    <div class="user_info ">
                                                        {{$us->post->count()}}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap" >
                                                    <div class="user_info ">
                                                        {{$us->comment->count()}}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap"><div class="user_info">{{\Carbon\Carbon::parse($us->last_sign_in_at)->diffForHumans()}}</div></td>
                                                <td>
                                                    <a href="{{route('user1.edit',$us->id)}}" class="btn btn-sm btn-warning">
                                                        <span class="fa fa-edit"></span></a>
                                                    <a href="{{route('user1.show',$us->id)}}" class="btn btn-sm btn-info">
                                                        <span class="fa fa-info"></span></a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="docModal{{$us->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">User Info</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-4"><img width="120" src="{{asset('storage/'.$us->avatar)}}" ></div>
                                                                    <div class="col-md-4">
                                                                        <h4>{{$us->name}}</h4>
                                                                        <h4>Surnames</h4>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <h4>Year</h4>
                                                                        <h4>Address</h4>
                                                                    </div>

                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">first</div>
                                                                    <div class="col-md-4">second</div>
                                                                    <div class="col-md-4">third</div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    @include('user.detail')--}}
@endsection
