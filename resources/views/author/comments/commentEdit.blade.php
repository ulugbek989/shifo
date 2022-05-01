@extends('layouts.admin')

@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Author Comment
                    </div>

                    <div class="card-body">
                        <form method="post" action="{{route('comment1.update',$comment->id)}}">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="normal-input" style="color: #3addc2" class="form-control-label">Title</label>
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
