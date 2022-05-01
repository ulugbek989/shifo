@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="row">
                <div class="col-md-3">
                    <div class="card p-4">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="user_info">
                                <span class="font-weight-light ">Contactdan yuborilgan zayavkalar soni</span>
                                <span class="h4 d-block mb-2 text-center text-dark font-bold fs-3">{{\App\Models\Contact::all()->count()}}</span>
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
                            <span class="text-black">Contact</span>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr class="text-white">
                                        <td>id</td>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Phone</td>
                                        <td>Disease</td>
                                        <td>Message</td>

                                    </tr>
                                  </thead>
                                  <tbody >
                                      @foreach($contacts as $contact)
                                    <tr class="text-white">
                                        <td>{{$contact->id}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->kasallik}}</td>
                                        <td>{{$contact->message}}</td>
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
