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
                                <thead>
                                <tr style="color: #3addc2">
                                    <th>ID</th>
                                    <th>Post</th>
                                    <th>Content</th>
                                    <th>Update_at</th>
                                    <th>Crated_at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Auth::user()->comment as $post)
                                    <tr style="color: #d0e0dd">
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->post->title}}</td>
                                        <td class="text-nowrap">{{$post->content}}</td>
                                        <td>{{\Carbon\Carbon::parse($post->created_at)->diffForHumans()}}</td>
                                        <td>{{\Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}</td>

                                        <td>
                                            <a href="{{route('comment1.edit',$post->id)}}" class="btn btn-warning">Edit</a>
                                            <form style="display: none" method="post" id="comment1.destroy-{{$post->id}}" action="{{route('comment1.destroy',$post->id)}}">@csrf</form>
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

    @foreach(Auth::user()->comment as $post)
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
                        <form method="post" id="comment1.destroy-{{$post->id}}" action="{{route('comment1.destroy',$post->id)}}">@method('DELETE') @csrf
                            <button type="submit" class="btn btn-primary">Yes, delete id</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
