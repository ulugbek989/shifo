@extends('layouts.logReg')

@section('content')
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Reset</label>
        <div class="login-form">

            <div class="reset-htm">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="group">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>


                            <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                    </div>

                    <div class="group">
                            <button type="submit" class="button">
                                {{ __('Send Password Reset Link') }}
                            </button>
                    </div>
                </form>

            </div>
        </div>
    </div>




@endsection
