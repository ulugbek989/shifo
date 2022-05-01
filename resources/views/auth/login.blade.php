@extends('layouts.logReg')
@section('content')
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-2" class="tab">Login</label>
        <input class="sign-up"><label for="tab-2" class="tab"></label>
        <div class="login-form">
            <div class="sign-in-htm">
                <form method="post" action="{{route('login')}}">
                    @csrf
                    <div class="group">
                        <label for="email" class="label">Email</label>
                        <input class="input @error('email') is-invalid @enderror" type="email" name="email" placeholder="Emailni kiriting">
                        <span class="focus-input100"></span>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror                </div>
                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input class="input @error('password') is-invalid @enderror" type="password" name="password" placeholder="Passwordni kiriting">
                        <span class="focus-input100"></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Eslab qolish</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Kirish">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        @if (Route::has('password.request'))
                            <a class="txt1" href="{{ route('password.request') }}">
                                {{ __('Passwordni unutdingizmi?') }}
                            </a>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
