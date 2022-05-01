@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header bg-light">
                        Patients
                    </div>

                    <div class="card-body ">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="text-white">
                                <tr>
                                    <th class="text-nowrap text"><div class="user_info">Foto</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Name</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Posts</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Comments</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Degree</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Last visit</div></th>
                                    <th class="text-nowrap text"><div class="user_info">Action</div></th>
                                </tr>
                                </thead>
                                <tbody >
                                @foreach($users as $us)
                                        <tr>
                                            @if($us->isOnline())
                                            <td ><a href="{{route('user.show',$us->id)}}" data-toggle="modal" data-target="#docModal{{ $us->id }}" >
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

                                                @if($us->admin!=true and $us->author!=true)
                                                    <td class="text-nowrap text"><div class="user_info"><span>User</span></div></td>
                                                @elseif($us->admin==true or ($us->admin==true and $us->author==true) )
                                                    <td class="text-nowrap text"><div class="user_info"><span>Admin</span></div></td>
                                                @else
                                                    <td class="text-nowrap text"><div class="user_info"><span>Author</span></div></td>
                                                @endif



                                                <td class="text-nowrap text"><div class="user_info"><span>{{\Carbon\Carbon::parse($us->last_sign_in_at)->diffForHumans()}}</span></div></td>
                                            <td >

{{--                                                <a href="{{route('adminMessage',$us->id)}}" class="btn btn-sm btn-danger"><span class="fa fa-envelope"></span> </a>--}}
                                                <a href="{{route('user.edit',$us->id)}}" class="btn btn-sm btn-warning">
                                                    <span class="fa fa-edit"></span></a>
                                                <a href="{{route('user.show',$us->id)}}" data-toggle="modal" data-target="#docModal{{ $us->id }} class="btn btn-sm btn-info">
                                                    <span class="fa fa-info"></span></a>
                                                <form style="display: none" method="post" id="user.destroy-{{$us->id}}" action="{{route('user.destroy', $us->id)}}">@csrf</form>
                                                    <a href="{{route('user.destroy',$us->id)}}" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#deletePostModal-{{$us->id}}"><span class="fa fa-trash"></span></a>

                                            </td>
                                            @else

                                                <td>
                                                    <a href="{{route('user.show',$us->id)}}" data-toggle="modal" data-target="#docModal{{ $us->id }}" >
                                                        <div class="img_cont">
                                                           <img src="{{asset('storage/'. $us->avatar)}}" class="rounded-circle user_img " alt="wow">
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

                                                @if($us->admin!=true and $us->author!=true)
                                                    <td  class="text-nowrap" >
                                                        <div class="user_info ">
                                                            User
                                                        </div>
                                                    </td>
                                                @elseif($us->admin==true or ($us->admin==true and $us->author==true) )
                                                    <td  class="text-nowrap" >
                                                        <div class="user_info ">
                                                            Admin
                                                        </div>
                                                    </td>
                                                @else
                                                    <td  class="text-nowrap" >
                                                        <div class="user_info ">
                                                            Author
                                                        </div>
                                                    </td>
                                                @endif
                                                <td class="text-nowrap" >
                                                    <div class="user_info ">
                                                    {{\Carbon\Carbon::parse($us->last_sign_in_at)->diffForHumans()}}
                                                    </div>
                                                </td>
                                                <td class="text-nowrap">

{{--                                                    <a href="{{route('adminMessage',$us->id)}}" class="btn btn-sm btn-danger"><span class="fa fa-envelope"></span> </a>--}}

                                                    <a href="{{route('user.edit',$us->id)}}" class="btn btn-sm btn-warning">
                                                        <span class="fa fa-edit"></span></a>
                                                    <a href="{{route('user.show',$us->id)}}" data-toggle="modal" data-target="#docModal{{ $us->id }}" class="btn btn-sm btn-info">
                                                        <span class="fa fa-info"></span></a>
                                                    <form style="display: none" method="post" id="user.destroy-{{$us->id}}" action="{{route('user.destroy', $us->id)}}">@csrf</form>
                                                    <a href="{{route('user.destroy',$us->id)}}"  class="btn btn-sm btn-dark" data-toggle="modal" data-target="#deletePostModal-{{$us->id}}"><span class="fa fa-trash"></span></a>

                                                </td>
                                            @endif
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
                                                                <div class="col-md-4"><img width="120" src="{{asset('storage/'. $us->avatar)}}" ></div>
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
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach($users as $user)
        <div class="modal fade" id="deletePostModal-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">You are about to delete {{$user->title}}</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No, keep it</button>
                        <form method="post" id="adminDeletePost-{{$user->id}}" action="{{route('user.destroy',$user->id)}}">@method('DELETE') @csrf
                            <button type="submit" class="btn btn-primary">Yes, delete id</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
