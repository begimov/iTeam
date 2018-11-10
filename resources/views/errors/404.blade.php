@extends('layouts.app')

@section('title')
    <title>К сожалению, запрашиваемая страница не найдена</title>
@endsection

@section('content')
<div class="container">
  <div class="row text-center">
    <div class="col mt-5">
      <div class="card text-white bg-danger">
        <div class="card-body"><h4 class="mb-0">{{ trans('validation.exception_errors.404') }}</h4></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col mt-3">
      <div class="card">
        <div class="card-body text-center">
          <img src="{{ asset('img/home/gift_box.png') }}" class="img-fluid">
          <h2>Приносим извинения и дарим</h2>
          <free-magnet 
            description="Книга &laquo;Как внедрить бизнес-процессы&raquo;!"
            campaign-token="VjVkP"
            layout-type="horizontal"
            no-phone="true"
            redirect-url="{{ config('urls.magnets.processes_book') }}" />
        </div>
      </div>
    </div>
  </div>
  <div class="row text-center mt-3 mb-5">
    <div class="col">
      <a href="{{ route('home') }}">Вернуться на главную</a>
    </div>
  </div>
</div>
@endsection
