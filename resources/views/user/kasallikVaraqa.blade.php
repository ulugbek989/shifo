@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h5>{{Auth::user()->name}}</h5>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr style="color: #4eb2ba">
                                    <th>Rasm</th>
                                    <th>Doctor</th>
                                    <th>Qabul qilingan vaqti</th>
                                    <th>Shikoyat</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Auth::user()->bemorlar as $bemor)
                                        <tr>
                                            <td><a href="{{route('userVaraqaId',$bemor->id)}}" >
                                                    <img style="border-radius: 50px" class="text-muted" alt="img" width="50" src="{{asset('storage/'.$bemor->user->avatar)}}"></a></td>
                                            <td class="text-nowrap" style="color: #efecec"> @foreach($users as $admin)
                                                    <h5>
                                                        @if($admin->id==$bemor->author_id)
                                                            {{$admin->name}}
                                                        @endif
                                                    </h5>
                                                @endforeach</td>
                                            <td class="text-nowrap" style="color: #efecec">{{\Carbon\Carbon::parse($bemor->user->updated_at)->diffForHumans()}}</td>
                                            <td class="text-nowrap" style="color: #efecec">{{Illuminate\Support\Str::limit($bemor->shikoyat,20)}}</td>
                                            <td>

                                                <a href="{{route('userVaraqaId',$bemor->id)}}" class="btn btn-sm btn-info">
                                                    <span class="fa fa-info"></span></a>
                                            </td>
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
