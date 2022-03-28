@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card shadow">
                <!-- <center><div class="card-header">{{ __('Register') }}</div><center> -->
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class=" form-signin">
                        @csrf
                        <h2 class="form-signin-heading">Register As a ADMIN</h2>

                        <div class="form-group row register-wrap">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right"></label> -->

                            <div class="col-md-12">
                                <input id="name" type="text" placeholder="Enter Your Name"class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row register-wrap">
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-right"></label> -->

                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row register-wrap">
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-right"></label> -->

                            <div class="col-md-12">
                                <input id="password" type="password"  placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row register-wrap">
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label> -->

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" placeholder="Confrom-Password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row  register-wrap">
                            <div class="col-md-12 offset-md-4">
                                <button type="submit" class="btn btn-lg btn-login btn-block" >
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
