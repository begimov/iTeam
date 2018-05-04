@extends('layouts.app')

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
            description="Мастер-класс &laquo;Как улучшить бизнес процессы компании&raquo;"
            campaign-token="nlopl"
            layout-type="horizontal" />
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
