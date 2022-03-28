@extends('layouts.app')

@section('content')
<div class="container">
<!-- <img class="justify-content-center"src="{{asset ('admin/images/icare_logo_white.png')}}" height="150px" width="auto"> -->

    <form class="form-signin shadow" method="POST" action="{{ route('login') }}">
    @csrf
   
    <h2 class="form-signin-heading">Login As a ADMIN</h2>
    <div class="login-wrap">
        <input id="email" type="email" placeholder="User ID" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus style="margin-bottom: 10px;">
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        <input id="password" type="password" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
        <label class="checkbox">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
            <span class="pull-right">
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </span>
        </label>
        <button class="btn btn-lg btn-login btn-block" type="submit">Log in</button>
    </div>
</form>
               
</div>
@endsection