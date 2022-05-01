@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-header bg-light">
                            Edit Post
                        </div>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>
                                            {{$error}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="card-body text-white">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Title</label>
                                            <input value="{{$post->title}}" name="title" id="normal-input" class="form-control" placeholder="Post title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="placeholder-input" class="form-control-label">Content</label>
                                            <textarea name="ctn" class="form-control" placeholder="Post content" rows="10" cols="30">{{$post->ctn}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="placeholder-input" class="form-control-label">Img</label>
                                            <div class="d-flex flex-column-reverse flex-md-row">
                                                <div class="">
                                                    <input type="file" name="img" id="normal-input" class=" p-0 col-12 " placeholder="Post img">    
                                                </div>

                                                <img  class="form-control-file w-50 w-md-25 col-lg-8" alt="img"  src="{{asset( 'storage/' . $post->img )}}">
                                            </div>
                                          </div>
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit">Edit post</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

@endsection

