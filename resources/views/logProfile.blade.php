@extends('layouts.logReg')
@section('content')
<section>
    <div class="login-html">
        <h1 class="text-white text-center">Sahifani tanlang</h1>
        <div class="d-flex flex-column p-3">
            <a class="btn btn-success p-2 m-2" href="{{route('index')}}">Saytga O'tish</a>
            @if(Auth::user()->admin==true)
            <a class="btn btn-primary p-2 m-2" href="{{route('admin')}}">Profilega O'tish</a>
            @elseif(Auth::user()->author==true)
            <a class="btn btn-primary p-2 m-2" href="{{route('author')}}">Profilega O'tish</a>
            @else
            <a class="btn btn-primary p-2 m-2" href="{{route('userProfile')}}">Profilega O'tish</a>
            @endif

        </div>
    </div>
</section>

@endsection