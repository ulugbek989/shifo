@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="user_info">
                                <span class="font-weight-light ">Konsultatsiyadan yuborilgan zayavkalar soni</span>
                                <span class="h4 d-block mb-2 text-center text-dark font-bold fs-3">{{\App\Models\Konsultatsiya::all()->count()}}</span>
                            </div>
                            <div class="h2 text-muted">
                                <div class="user_info">
                                    <span><i class="icon icon-people"></i></span>
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
                            <span class="text-black">Konsultatsiya</span>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr class="text-white">
                                        <td>id</td>
                                        <td>Name</td>
                                        <td>Surname</td>
                                        <td>Section</td>
                                        <td>Phone</td>
                                        <td>Day</td>
                                        <td>Message</td>

                                    </tr>
                                  </thead>
                                  <tbody >
                                      @foreach($konsultatsiyalar as $konsultatsiya)
                                    <tr class="text-white">
                                        <td>{{$konsultatsiya->id}}</td>
                                        <td>{{$konsultatsiya->name}}</td>
                                        <td>{{$konsultatsiya->surname}}</td>
                                        <td>{{$konsultatsiya->section}}</td>
                                        <td>{{$konsultatsiya->phone}}</td>
                                        <td>{{$konsultatsiya->day}}</td>
                                        <td>{{$konsultatsiya->message}}</td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
