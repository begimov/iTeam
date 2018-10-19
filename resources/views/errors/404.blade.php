@extends('layouts.app')

@section('title')
    <title>К сожалению, запрашиваемая страница не найдена</title>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col mt-5">
      <div class="card text-white bg-danger">
        <div class="card-body"><h4 class="mb-0">{{ trans('validation.exception_errors.404') }}</h4></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col mt-3">
      <div class="card">
        <div class="card-body">
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
</div>
@endsection
