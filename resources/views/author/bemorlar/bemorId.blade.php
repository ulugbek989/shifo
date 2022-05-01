@extends('layouts.admin')
@section('content')
    <div class="content p-0 p-md-5">
        <div class="">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-light">
                        <div class="row">
                            <div class="col-md-4 text-left">
                                <h5><a href="{{route('bemor.index')}}"><span class="fa fa-arrow-circle-left"></span>Ortga</a></h5>
                            </div>
                       <div class="col-md-4 text-center">
                            <h5>{{$user->name}}</h5>
                       </div>
                        <div class="col-md-4 text-right">
                            <a href="{{route('bemor.edit',$user->id)}}"
                               class="btn btn-sm btn-warning">
                                Tashxis qo'shis-<span class="fa fa-edit"></span>
                            </a>
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
                                    <th>Shikoyat</th>
                                    <th>Tavsiya</th>
                                    <th>Qabul qilingan vaqti</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                        @foreach($user->bemorlar as $bemor)
                                            @if($bemor->user_id==$user->id)
                                        <tr>
                                            @foreach($users as $admin)
                                                @if($admin->id==$bemor->author_id)

                                                <td><a href="{{route('detail',$bemor->id)}}">
                                                    <img style="border-radius: 50px" class="text-muted" alt="img" width="50" src="{{asset('storage/'.$admin->avatar)}}"></a></td>
                                            <td class="text-nowrap" style="color: #efecec">

                                                    <h5>
                                                            {{$admin->name}}
                                                    </h5>

                                            </td>
                                                @endif
                                            @endforeach
                                            <td class="text-nowrap" style="color: #efecec">{{Illuminate\Support\Str::limit($bemor->shikoyat,20)}}</td>
                                            <td class="text-nowrap" style="color: #efecec">{{Illuminate\Support\Str::limit($bemor->tavsiya,20)}}</td>
                                            <td class="text-nowrap" style="color: #efecec">{{\Carbon\Carbon::parse($bemor->created_at)->diffForHumans()}}</td>
                                            <td>
                                                <a href="{{route('detail',$bemor->id)}}" class="btn btn-sm btn-info">
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
