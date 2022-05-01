@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header bg-light">
                            Edit {{$user->name}}
                        </div>
                        @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @elseif($errors->any())
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
                        <form action="{{route('user.update',$user->id)}}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Name</label>
                                            <input value="{{$user->name}}" name="name" id="normal-input" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Email</label>
                                            <input value="{{$user->email}}" name="email" type="email" id="normal-input" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="normal-input" class="form-control-label">Permissions</label><br>

                                            <input type="checkbox"  name="author" value=1 {{$user->author==true ? 'checked':''}}>
                                            <label for="normal-input" class="form-control-label">Author</label><br>


                                            <input type="checkbox"  name="admin" value=1 {{$user->admin==true ? 'checked': ''}} >
                                            <label for="normal-input" class="form-control-label">Admin</label>

                                        </div>
                                    </div>

                                </div>

                                <button class="btn btn-success" type="submit">Update user</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

@endsection

