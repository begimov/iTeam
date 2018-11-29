@extends('layouts.app')

@section('title')
    <title>@lang('auth.login')</title>
@endsection

@section('content')
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 mb-4">
            <h1>@lang('auth.login')</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            @include('auth.partials._loginform')
        </div>
    </div>
</div>
@endsection
