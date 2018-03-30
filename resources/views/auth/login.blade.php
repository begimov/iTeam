@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 mb-4">
            <h1>@lang('auth.login')</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="email" class="font-weight-normal">@lang('auth.email')</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password" class="font-weight-normal">@lang('auth.password')</label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="form-check">
                    <input id="rememberCheck" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                    <label for="rememberCheck">@lang('auth.remember_me')</label> 
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        @lang('auth.login_btn')
                    </button>
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        @lang('auth.forgot_your_password')
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
