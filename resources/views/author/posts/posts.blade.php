@extends('layouts.admin')

@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Admin posts

                      <a href="{{route('post1.create')}}" class="btn btn-primary">Post qo'shish</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="docTable" class="table table-striped">
                                <thead>
                                <tr style="color: #3addc2">
                                    <th>ID</th>
                                    <th>Img</th>
                                    <th>Title</th>
                                    {{-- <th>Content</th> --}}
                                    <th>Created_at</th>
                                    {{-- <th>Updated_at</th> --}}
                                    <th>Comments</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody >
                                @foreach($posts as $post)
                                    <tr style="color: #d1dddb">
                                        <td>{{$post->id}}</td>
                                        <td class="text-nowrap"><img width="80" height="80" src="{{asset('storage/'.$post->img)}}"></td>

                                        <td class="text-nowrap">{{$post->title}}</td>
                                        {{-- <td class="text-nowrap">{{$post->ctn}}</td> --}}

                                        <td>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</td>
                                        {{-- <td>{{\Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}</td> --}}
                                        <td>{{$post->comment->count()}}</td>

                                        <td>
                                            <a href="{{route('post1.edit',$post->id)}}"  class="btn btn-warning">Edit</a>

                                            <form style="display: none" method="post" id="post1.destroy-{{$post->id}}" action="{{route('post1.destroy',$post->id)}}">@csrf</form>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletePostModal-{{$post->id}}">X</button>
                                        </td>

                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @foreach($posts as $post)
        <div class="modal fade" id="deletePostModal-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">You are about to delete {{$post->title}}</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No, keep it</button>
                        <form method="post" id="post1.destroy-{{$post->id}}" action="{{route('post1.destroy',$post->id)}}">@method('DELETE')@csrf
                            <button type="submit" class="btn btn-primary">Yes, delete id</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection
