@extends('layouts.app')

@section('title')
    <title>Профиль</title>
@endsection

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col mb-4">
                <h1>Профиль</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-6">
                <form method="POST" action="{{ route('user.profile.settings.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">@lang('auth.email')</label>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" value="{{ old('email', auth()->user()->email) }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">@lang('auth.name')</label>
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{ old('name', auth()->user()->name) }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">@lang('auth.save')</button>
                    </div>
                </form>
            </div>
            
            <div class="col-sm-6">
                <form action="{{ route('user.profile.settings.password.store') }}" method="POST">
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="password_current" class="control-label">@lang('auth.current_password')</label>
                        <input type="password" name="password_current" id="password_current" 
                            class="form-control{{ $errors->has('password_current') ? ' is-invalid' : '' }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('password_current') }}
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label for="password" class="control-label">@lang('auth.new_password')</label>
                        <input type="password" name="password" id="password" 
                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label for="password_confirmation" class="control-label">@lang('auth.confirm_password')</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" 
                            class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}">
                        <div class="invalid-feedback">
                            {{ $errors->first('password_confirmation') }}
                        </div>
                    </div>
    
                    <button type="submit" class="btn btn-primary">@lang('auth.save')</button>
                </form>
            </div>
        </div>
    </div>
@endsection