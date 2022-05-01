@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div style="color: #3addc2">
                                <span class="h4 d-block font-weight-normal mb-2">{{\App\Models\User::all()->count()}}</span>
                                <span class="font-weight-light">Foydalanuvchilar</span>
                            </div>

                            <div  class="h2 text-muted">
                                <i style="color: #3addc2" class="icon icon-people"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div style="color: #3addc2">
                                <span class="h4 d-block font-weight-normal mb-2">{{Auth::user()->all()->count()}}</span>
                                <span class="font-weight-light">Shifokorlar</span>
                            </div>

                            <div class="h2 text-muted">
                                <i style="color: #3addc2" class="icon icon-user"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div style="color: #3addc2">
                                <span class="h4 d-block font-weight-normal mb-2">{{Auth::user()->post->count()}}</span>
                                <span class="font-weight-light">Postlar</span>
                            </div>

                            <div class="h2 text-muted">
                                <i style="color: #3addc2" class="icon icon-paper-plane"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div style="color: #3addc2">
                                <span class="h4 d-block font-weight-normal mb-2">{{Auth::user()->comment->count()}}</span>
                                <span class="font-weight-light">Kommentlar</span>
                            </div>

                            <div class="h2 text-muted">
                                <i style="color: #3addc2" class="icon icon-paper-clip"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div style="color: #3addc2">
                                <span class="h4 d-block font-weight-normal mb-2">{{Auth::user()->postToday->count()}}</span>
                                <span class="font-weight-light">Bugungi postlar</span>
                            </div>

                            <div class="h2 text-muted">
                                <i style="color: #3addc2" class="icon icon-paper-plane"></i>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div style="color: #3addc2">
                                <span class="h4 d-block font-weight-normal mb-2">{{Auth::user()->commentToday->count()}}</span>
                                <span class="font-weight-light">Bugungi kommentlar</span>
                            </div>

                            <div class="h2 text-muted">
                                <i style="color: #3addc2" class="icon icon-paper-clip"></i>
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
                    <div class="card" style="color: #3addc2">
                        <div class="card-header">
                            Faoliyat
                        </div>

                        <div class="card-body p-0">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
