@extends('layouts.admin')
@section('content')

        <div class="content p-0 p-md-5">
                    <div class="">
                        <div class="row">
                            <div class="col-md-4"><img width="120" src="/images/{{$user->avatar}}" ></div>
                            <div class="col-md-4">
                                <h4>{{$user->name}}</h4>
                                <h4>Surnamessssss</h4>

                            </div>
                            <div class="col-md-4">
                                <h4>Year</h4>
                                <h4>Address</h4>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">first</div>
                            <div class="col-md-4">second</div>
                            <div class="col-md-4">third</div>
                        </div>

                    </div>


        </div>



@endsection
