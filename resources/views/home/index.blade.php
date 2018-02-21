@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <div class="row">
          <div class="col-md-4">
            Изображение/Видео
          </div>
          <div class="col-md-8">
            <h1>Заголовок</h1>
            <p class="lead">Подзаголовок</p>
            <p>Описание</p>
            <p><a class="btn btn-primary btn-lg" href="{{ route('user.dashboard.index', ['product_id' => 3, 'price_tag' => 3]) }}" role="button">BUY</a></p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">CTA</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
