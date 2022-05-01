@extends('layouts.logReg')

@section('content')
    <div class="login-html">
        <input class="sign-in" ><label for="tab-1" class="tab"></label>
        <input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Registratsiya</label>

        <div class="login-form">
            <div class="sign-up-htm">
                <form method="post" action="{{route('register')}}">
                    @csrf
                    <div class="group">
                        <label for="name" class="label">Ism</label>
                        <input class="input @error('name') is-invalid @enderror" type="text" name="name" placeholder="Ismni kiriting">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="familya" class="label">Familya</label>
                        <input class="input @error('familya') is-invalid @enderror" type="text" name="familya" placeholder="Familya kiriting">
                        @error('familya')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="name" class="label">Sharif</label>
                        <input class="input @error('sharif') is-invalid @enderror" type="text" name="sharif" placeholder="Sharifni kiriting">
                        @error('sharif')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="name" class="label">Tug'ilgan yili</label>
                        <input class="input @error('yosh') is-invalid @enderror" type="text" name="yosh" placeholder="Tug'ilgan yilni kiriting">
                        @error('yosh')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="name" class="label">Jinsi</label>
                        <input class="input @error('jinsi') is-invalid @enderror" type="text" name="jins" placeholder="Jinsni kiriting">
                        @error('jinsi')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="group">
                        <label for="password" class="label">Password</label>
                        <input class="input @error('password') is-invalid @enderror" type="password" name="password" placeholder="Passwordni kiriting">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror                </div>
                    <div class="group">
                        <label for="password_confirmation" class="label">Takror Password</label>
                        <input class="input @error('password_confirmation') is-invalid @enderror" type="password" name="password_confirmation" placeholder="Passwordni takrorlang">
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Email</label>
                        <input class="input @error('email') is-invalid @enderror" type="email" name="email" placeholder="Emailni kiriting">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Registratsiya">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <label for="tab-1">Allaqachon Ro'yhatdan o'tganmisiz?</label>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
