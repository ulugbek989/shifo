@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
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
                        <form action="{{route('post1.update' , $post->id)}}" method="post" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" style="color: #3addc2" class="form-control-label">Title</label>
                                            <input value="{{$post->title}}" name="title" id="normal-input" class="form-control" placeholder="Post title">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-8">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="placeholder-input" style="color: #3addc2" class="form-control-label">Content</label>
                                            <textarea name="ctn" class="form-control"  rows="7" cols="30">{{$post->ctn}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-8 d-flex flex-row  justify-content-start">
                                <div class="col-6 ">
                                    <div class="">
                                        <label for="normal-input" style="color: #3addc2" class="form-control-label">Img</label>
                                        <img  class="form-control-file" alt="img" width="300" height="500" src="{{asset('storage/'. $post->img)}}">
                                        <input type="file" name="img" id="normal-input" class="form-control" placeholder="Post img">
                                    </div>
                                </div>
                                

                                </div>
                                    <button class="btn btn-success m-2" style="color: #d0e2e2" type="submit">Edit post</button>

                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

