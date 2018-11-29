@extends('layouts.app')

@section('title')
    <title>@lang('auth.register')</title>
@endsection

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <h2 class="mb-4">@lang('auth.register')</h2>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                @lang('auth.register_btn')
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-5">
            <h2 class="mb-4">@lang('auth.login')</h2>
            <div class="card">
                <div class="card-body">
                    @include('auth.partials._loginform')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
