@extends('layouts.app') 

@section('title')
    <title>iTeam.ru - Стратегия. Бизнес-процессы. Оргструктура. Мотивация.</title>
@endsection

@section('meta_tags')
  <meta name="description" content="Бизнес-процессы, стратегия, оргструктура, финансовое управление, управление персоналом, мотивация, управленческий учет. Обучение для собственников бизнеса и руководителей компании. Мастер-классы по бизнесу и управлению онлайн. Консалтинг." />
  <meta name="keywords" content="Бизнес-процессы, стратегия, оргструктура, финансовое управление, управление персоналом, мотивация, управленческий учет, консалтинговая компания, мастер классы для руководителей, консалтинговые услуги, мастер классы для топ менеджеров, управленческий консалтинг, обучение руководителей, обучение для руководителей цена, разработка системы мотивации сотрудников, услуги консалтинга" />
@endsection

@section('content')
<!-- TEASERS -->
<div class="container-fluid p-0">
  <div class="row">
    <div class="col-lg-6 p-5 promo">
      <div class="row h-100">
        <div class="col-12 align-self-center text-white">
          <h3 class="font-italic m-0">РУССКИЙ МЕНЕДЖМЕНТ</h3>
          <h2 class="display-4 font-weight-bold font-italic m-0">БИЗНЕС КАК СИСТЕМА</h2>
          <h4 class="mb-3 display-5 font-weight-light">Создайте систему управления компанией</h4>
          <div class="text-right mr-5">
            <a href="#" class="btn btn-primary btn-lg">УЧАСТВОВАТЬ</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 p-0">
      <div class="row pt-4 pb-3">
        <div class="col-sm-4 align-self-center text-center">
          <img src="{{ asset('img/home/gift_box.jpg') }}" class="img-fluid">
        </div>
        <div class="col-xl-7 col-sm-8 align-self-center py-5 pr-5">
          <free-magnet 
            description="Мастер-класс &laquo;Как улучшить бизнес процессы компании&raquo;"
            campaign-token="nlopl" />
        </div>
      </div>
      <div class="row bg-primary text-center text-white">
        <div class="col">
          <h6 class="lead m-0">Эту книгу скачали</span>
            <span class="badge badge-light text-primary badge-pill my-2">34076 раз</span>
          </h6>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- RU MANAGEMENT -->
<div class="container-fluid p-0">
  <div class="row">
    <div class="col-xl-3 col-lg-4 d-none d-lg-block rm">&nbsp;</div>
    <div class="col-xl-9 col-lg-8 py-5">
      <div class="row py-5">
        <div class="col-xl-3">
          <div class="row">
            <div class="col-4 rm d-lg-none"></div>
            <div class="col-8 py-5 px-3 p-lg-0">
              <h4 class="text-uppercase">
                <a href="{{ route('company.rm.index') . '#_strategy' }}">
                  <span class="badge badge-dark font-weight-light">Стратегия</span>
                </a>
              </h4>
              <h4 class="text-uppercase font-weight-light">
                <a href="{{ route('company.rm.index') . '#_motivation' }}">
                  <span class="badge badge-dark font-weight-light">Мотивация</span>
                </a>
              </h4>
              <h4 class="text-uppercase">
                <a href="{{ route('company.rm.index') . '#_orgstructure' }}">
                  <span class="badge badge-dark font-weight-light">Оргструктура</span>
                </a>
              </h4>
              <h4 class="text-uppercase">
                <a href="{{ route('company.rm.index') . '#_processes' }}">
                  <span class="badge badge-dark font-weight-light">Бизнес-процессы</span>
                </a>
              </h4>
              <h4 class="text-uppercase">
                <a href="{{ route('company.rm.index') . '#_management' }}">
                  <span class="badge badge-dark font-weight-light">Целевое управление</span>
                </a>
              </h4>
            </div>
          </div>
        </div>
        <div class="col-xl-9 mt-5 mt-sm-5 mt-md-5 mt-lg-5 mt-xl-0">
          <h2 class="text-uppercase font-weight-bold">Русский Менеджмент</h2>
          <p class="lead">
            Наш сайт&nbsp;&mdash; это портал в&nbsp;Русский Менеджмент. Представленные на&nbsp;нем материалы образуют единую систему знаний об&nbsp;управлении организациями, которую мы&nbsp;создаем и&nbsp;развиваем вместе с&nbsp;тысячами управленцев на&nbsp;русскоязычном пространстве.<br>
            Мы&nbsp;даем дорожную карту, которая поможет вашей компании найти путь к&nbsp;управляемости и&nbsp;эффективности в&nbsp;пространстве Русского Менеджмента.
          </p>
          <p>
            <a href="{{ route('company.rm.index') }}" class="btn btn-light text-uppercase btn-sm">Узнать больше о Русском Менеджменте</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- VIDEOS -->
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col-lg-4 col-md-12 mt-2">
      <div class="card h-100">
        <div class="card-header bg-primary text-white text-uppercase text-center font-weight-normal">
          НЕ&nbsp;ПЛАНИРУЙТЕ В&nbsp;ОДИНОЧКУ?!
        </div>
        <div class="card-body text-center p-5 home-video-1">
          <youtube-player 
            video-id="J3xvXchigx4"
          ></youtube-player>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mt-2">
      <div class="card h-100">
        <div class="card-header bg-primary text-white text-uppercase text-center font-weight-normal">
          УПРАВЛЕНЧЕСКАЯ КОМАНДА&nbsp;&mdash; СЛАБОЕ ЗВЕНО?
        </div>
        <div class="card-body text-center p-5 home-video-2">
          <youtube-player 
            video-id="xYb5GFiAzwY"
          ></youtube-player>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mt-2">
      <div class="card h-100">
        <div class="card-header bg-primary text-white text-uppercase text-center font-weight-normal">
        Привлекайте сотрудников к внедрению ПРОЦЕССОВ с самого начала!
        </div>
        <div class="card-body text-center p-5 home-video-3">
          <youtube-player 
            video-id="bHeKh59-1tg"
          ></youtube-player>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- MASTER-PROJECTS -->
<div class="container-fluid mt-5">
  <div class="row">
    <div class="col">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-6 pt-4 pb-4">
            <h5 class="text-uppercase mb-4 font-weight-bold">мастер-проекты</h5>
            <p>
              <a href="{{ route('pages.category.index', config('urls.slugs.categories.mp')) }}">Создание стратегии</a>
            </p>
            <p>
              <a href="{{ route('pages.category.index', config('urls.slugs.categories.mp')) }}">Разработка планов и бюджетов</a>
            </p>
            <p>
              <a href="{{ route('pages.category.index', config('urls.slugs.categories.mp')) }}">Создание системы управления процессами</a>
            </p>
            <p>
              <a href="{{ route('pages.category.index', config('urls.slugs.categories.mp')) }}">Управление с помощью BSC</a>
            </p>
            <p>
              <a href="{{ route('pages.category.index', config('urls.slugs.categories.mp')) }}">Целевое управление</a>
            </p>
          </div>
          <div class="col-lg-3 col-sm-6">
            <img src="{{ asset('img/home/mp_boxes.jpg') }}" class="img-fluid"> </div>
          <div class="col-lg-5 col-sm-12 pt-4 pb-4">
            <h5 class="text-uppercase mb-4 font-weight-bold">что такое мастер-проект?</h5>
            <p>
              <ul>
                <li>Новая форма обучения и&nbsp;консультирования, в&nbsp;котором участвует вся управленческая команда.</li>
                <li>Шаг за&nbsp;шагом под руководством консультанта-наставника вы&nbsp;проходите все этапы.</li>
                <li>Результат мастер-проекта&nbsp;&mdash; &nbsp;обученные сотрудники.</li>
              </ul>
            </p>
            <!-- <p>
              <a href="" class="btn btn-light text-uppercase">ОТЗЫВЫ</a>
            </p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- MASTER-CLASSES -->
<div class="container-fluid mt-4">
  <div class="row">
    <div class="col">
      <h5 class="text-uppercase font-weight-bold my-5">популярные мастер-классы</h5>
    </div>
  </div>
  <div class="row">
    @include('home.partials._popularmks')
  </div>
</div>
<!-- ARTICLES -->
<div class="container mt-4">
  <div class="row">
    <div class="col">
      <h5 class="text-uppercase font-weight-bold my-5">Статьи</h5>
    </div>
  </div>
  <div class="row">
  @foreach($posts as $post)
    <div class="col-xl-4 col-lg-6 mt-2">
      <p class="font-weight-bold">
        <a target="_blank" href="{{ $post->link }}">
          {{ $post->title->rendered }}
        </a>
      </p>
      {!! str_limit($post->excerpt->rendered, 200) . '</p>' !!}
    </div>
  @endforeach
  </div>
</div>
<!-- CLIENTS -->
<div class="container mt-5">
  <div class="row">
    <div class="col">
      <h5 class="text-uppercase font-weight-bold my-5">КЛИЕНТЫ</h5>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <img src="{{ asset('img/home/clients.jpg') }}" class="img-fluid"> </div>
  </div>
</div>
@endsection