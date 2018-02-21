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
            <form action="{{ route('orders.store') }}" method="post">
              <input type="hidden" value="3" name="product_id">
              <input type="hidden" value="33" name="price_tag">
              {{ csrf_field() }}
              <button type="submit">КУПИТЬ Продукт 1</button>
            </form>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">CTA</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
