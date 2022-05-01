@extends('layouts.admin')

@section('content')
    <div class="content p-0 p-md-5">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Admin Comment
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{route('comment.update',$comment->id)}}">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-8 text-white">
                                    <div class="form-group">
                                        <label for="normal-input" class="form-control-label">Title</label>
                                        <input value="{{$comment->content}}" name="content" id="normal-input" class="form-control" placeholder="Post title">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
