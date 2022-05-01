@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        Patients
                    </div>


                    <div class="card-body">
                        <div><img width="200" src="{{asset('storage/'. $us->avatar)}}"></div>
                        <div><p>{{$us->name}}</p></div>
                        <div><p>{{$us->email}}</p></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
