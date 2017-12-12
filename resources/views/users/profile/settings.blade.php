@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="get" action="#">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Телефон</label>
                        <input type="text" class="form-control" name="phone" id="phone">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="company">Компания</label>
                        <input type="text" class="form-control" name="company" id="company">
                    </div>
                    <div class="form-group">
                        <label for="businessEntity">ОПФ</label>
                        <input type="text" class="form-control" name="businessEntity" id="businessEntity">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>
@endsection