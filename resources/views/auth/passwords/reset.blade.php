@extends('layouts.app')

@section('title')
    <title>Сброс пароля</title>
@endsection

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 mb-4">
            <h1>Сброс пароля</h1>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                {{ csrf_field() }}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">@lang('auth.email')</label>
                  
                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="control-label">@lang('auth.password')</label>

                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
   
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="control-label">@lang('auth.confirm_password')</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif

                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">
                        @lang('auth.reset_password_cta')
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
