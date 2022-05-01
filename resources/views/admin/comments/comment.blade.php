@extends('layouts.admin')

@section('content')
    <div class="content p-0 p-md-5">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Admin posts
                    </div>

                    <div class="card-body ">
                        <div class="table-responsive ">
                            <table class="table table-striped text-white">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Who</th>
                                    <th>Comment</th>
                                    <th>where Post</th>
                                    <th>Crated_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr class="text-white">
                                        <td>{{$comment->id}}</td>
                                        <td>{{$comment->user->name}}</td>
                                        <td>{{$comment->content}}</td>
                                        <td class="text-nowrap">{{$comment->post->title}}</td>
                                        <td>{{\Carbon\Carbon::parse($comment->updated_at)->diffForHumans()}}</td>

                                        <td>
                                            <a href="{{route('comment.edit',$comment->id)}}" class="btn btn-warning">Edit</a>
                                            <form style="display: none" method="post" id="comment.destroy-{{$comment->id}}" action="{{route('comment.destroy',$comment->id)}}">  @csrf</form>
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#commentdestroy-{{$comment->id}}">X</button>
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

    @foreach($comments as $comment)
        <div class="modal fade" id="commentdestroy-{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">You are about to delete {{$comment->title}}</h4>
                    </div>
                    <div class="modal-body">
                        Are you sure?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">No, keep it</button>
                        <form method="post" id="comment.destroy-{{$comment->id}}" action="{{route('comment.destroy',$comment->id)}}">@method('DELETE') @csrf
                            <button type="submit" class="btn btn-primary">Yes, delete id</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
