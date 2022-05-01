@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Post qo'shish
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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                        <form method="post" action="{{route('post1.store')}}" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <input class="input-group" name="title" placeholder="Title"><br>
                            <textarea rows="5" cols="23" class="input-group" name="ctn" placeholder="Content"></textarea><br>
                            <input type="file" name="img" class="form-control" onchange="previewFile(this)"/>
                            <button type="submit" class="btn btn-success">Jo'natish</button>
                        </form>
                            </div>
                            <div class="col-md-4 text-center">
                                <img id="previewImg" alt="profile image" width="300" src="/images/{{'bosh.jpg'}}"/>
                                <h5></h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
