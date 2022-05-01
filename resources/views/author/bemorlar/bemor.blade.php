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
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr style="color: #4eb2ba">
                                    <th>Rasm</th>
                                    <th>Ism</th>
                                    <th>Tug'ilgan yili</th>
                                    <th>Qabul qilingan vaqti</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($bemorlar as $bemor)
                                    @if($bemor->author!=true and $bemor->admin!=true)
                                            <tr>
                                                <td><a href="{{route('bemor.show',$bemor->id)}}" >
                                                        <img style="border-radius: 50px" class="text-muted" alt="img" width="50" src="{{asset('storage/'.$bemor->avatar)}}"></a></td>
                                                <td class="text-nowrap" style="color: #efecec">{{$bemor->name}}</td>

                                                <td class="text-nowrap" style="color: #efecec">{{$bemor->yosh}}</td>

                                                <td class="text-nowrap" style="color: #efecec">{{\Carbon\Carbon::parse($bemor->updated_at)->diffForHumans()}}</td>
                                                <td>
                                                    <a href="{{route('bemor.edit',$bemor->id)}}" class="btn btn-sm btn-warning">
                                                        <span class="fa fa-edit"></span></a>
                                                    <a href="{{route('bemor.show',$bemor->id)}}" class="btn btn-sm btn-info">
                                                        <span class="fa fa-info"></span></a>
                                                </td>
                                            </tr>
                                    @endif
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
