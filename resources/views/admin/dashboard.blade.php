@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="user_info">
                                <span class="h4 d-block font-weight-normal mb-2">{{\App\Models\User::all()->count()}}</span>
                                <span class="font-weight-light ">Total Users</span>
                            </div>
                            <div class="h2 text-muted">
                                <div class="user_info">
                                    <span><i class="icon icon-people"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="user_info">
                                <span class="h4 d-block font-weight-normal mb-2">{{\App\Models\Post::all()->count()}}</span>
                                <span class="font-weight-light">Posts</span>
                            </div>

                            <div class="h2 text-muted">
                                <div class="user_info">
                                    <span><i class="icon icon-paper-plane"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="user_info">
                                <span class="h4 d-block font-weight-normal mb-2">{{\App\Models\Comment::all()->count()}}</span>
                                <span class="font-weight-light">Comments</span>
                            </div>

                            <div class="h2 text-muted">
                                <div class="user_info">
                                <span><i class="icon icon-paper-clip"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="user_info">
                                <span class="h4 d-block font-weight-normal mb-2">{{$s}}</span>
                                <span class="font-weight-light">Doctors</span>
                            </div>
                            <div class="h2 text-muted">
                                <div class="user_info">
                                <span><i class="icon icon-user"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="user_info">
                                <span class="h4 d-block font-weight-normal mb-2">{{\App\Models\Contact::all()->count()}}</span>
                                <span class="font-weight-light">Contact</span>
                            </div>

                            <div class="h2 text-muted">
                                <div class="user_info">
                                <span><i class="icon icon-paper-clip"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="user_info">
                                <span class="h4 d-block font-weight-normal mb-2">{{\App\Models\Konsultatsiya::all()->count()}}</span>
                                <span class="font-weight-light">konsultatsiya</span>
                            </div>

                            <div class="h2 text-muted">
                                <div class="user_info">
                                <span><i class="icon icon-paper-clip"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header ">
                            <span class="text-black">Total Users</span>
                        </div>
                        <div class="card-body p-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
