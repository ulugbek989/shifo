@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="row">

                <div class="col-md-12">
                    <form method="post" action="{{route('adminProfilePost')}}" enctype="multipart/form-data">

                        <div class="card">
                            <div class="card-header bg-light">
                                Account Settings
                            </div>

                            <div class="card-body">
                                <div class="row mb-5 text-white">
                                    <form action="{{route('adminProfile')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-4 mb-4">
                                            <div>Profile Image</div>
                                            <img src="{{asset('storage/'. Auth::user()->avatar)}}" style="width: 100px; height: 100px;float: left;border-radius: 50%;margin-right: 25px">
                                            <label>Update image file</label>
                                            <input type="file" name="img">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="submit" class="pull-right btn-primary">
                                        </div>
                                    </form>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Name</label>
                                                    <input name="name" class="form-control" value="{{Auth::user()->name}}">
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control-label">Email Address</label>
                                                    <input name="email" class="form-control" value="{{Auth::user()->email}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mt-5 text-white">
                                    <div class="col-md-4 mb-4">
                                        <div>Access Credentials</div>
                                        <div class="text small">Leave credentials fields empty if you don't wish to change the password.</div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">Current Password</label>
                                                    <input name="password" type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">New Password</label>
                                                    <input name="new_password" type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="form-control-label">New Password Cn</label>
                                                    <input name="new_password_confirmation" type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer bg-light text-right">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


@endsection
