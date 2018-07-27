@extends('layouts.app')

@section('title')
    <title>@lang('auth.register')</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 mb-4">
            <h1>@lang('auth.register')</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                {{-- <div class="form-group">
                    <label for="name" class="font-weight-normal">@lang('auth.name')</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </div>
                    @endif
                </div> --}}

                <div class="form-group">
                    <label for="email" class="font-weight-normal">@lang('auth.email')</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
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

                {{-- <div class="form-group">
                    <label for="password-confirm" class="font-weight-normal">@lang('auth.confirm_password')</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div> --}}

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        @lang('auth.register_btn')
                    </button>
                </div>
            </form>

        </div>
    </div>

    <div class="row justify-content-center mt-4">
        <div class="col text-center">
            <h2>@lang('auth.already_registered')</h2>
            <p class="mt-3"><a href="{{ route('login') }}" class="btn btn-light text-uppercase">@lang('partials.header.signin')</a></p>
        </div>
    </div>

</div>
@endsection
