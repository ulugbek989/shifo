@extends('layouts.admin')

@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Admin posts
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead class="text-white">
                                <tr>
                                    <th>ID</th>
                                    <th>Who</th>
                                    <th>Title</th>
                                    <th>Created_at</th>
                                    {{-- <th>Updated_at</th> --}}
                                    <th>Comments</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody class="">
                                @foreach($posts as $post)
                                    <tr class="text-white">
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->user->name}}</td>
                                        <td >{{$post->title}}</td>
                                        <td>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</td>
                                        {{-- <td>{{\Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}</td> --}}
                                        <td>{{$post->comment->count()}}</td>

                                        <td>
                                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-warning">Edit</a>
                                            <form style="display: none" method="post" id="post.destroy-{{$post->id}}" action="{{route('post.destroy',$post->id)}}">@csrf</form>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#post.destroy-{{$post->id}}">X</button>
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
        <div class="modal fade" id="post.destroy-{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                        <form method="post" id="post.destroy-{{$post->id}}" action="{{route('post.destroy',$post->id)}}">@method('DELETE') @csrf
                            <button type="submit" class="btn btn-primary">Yes, delete id</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
