@extends('layouts.app')

@section('title')
    <title>@lang('auth.reset_password')</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 mb-4">
            <h1>@lang('auth.reset_password')</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
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
                    <button type="submit" class="btn btn-primary">
                        @lang('auth.send_password_reset_link_btn')
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
