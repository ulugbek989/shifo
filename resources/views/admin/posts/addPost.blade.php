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
                    <div class="card-body text-white">
                        <div class="row">
                            <div class="col-md-8">
                        <form method="post" action="{{route('post.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input class="input-group-text w-100" name="title" placeholder="Title"><br>
                            <textarea rows="5" cols="23" class="input-group-text w-100" name="ctn" placeholder="Content"></textarea><br>
                            <input type="file" name="img"  id="img"><br>
                            <button type="submit" class="btn btn-success m-2">Jo'natish</button>
                        </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
