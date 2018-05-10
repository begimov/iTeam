@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col mb-4">
                <h1>Профиль</h1>
            </div>
        </div>
        <form method="POST" action="{{ route('user.profile.settings.store') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ old('email', auth()->user()->email) }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old('name', auth()->user()->name) }}">
                    </div>
                </div>
                <div class="col-sm-6">
                    {{-- <div class="form-group">
                        <label for="company">Компания</label>
                        <input type="text" class="form-control" name="company" id="company">
                    </div> --}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Сохранить</button>
                </div>
            </div>
        </form>
    </div>
@endsection