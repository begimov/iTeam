@extends('layouts.app') @section('content')
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
    <div class="col-xl-2 col-md-3 col-sm-6 p-2">
      <a href="#" class="text-white">
        <div class="card">
          <div class="card-body text-center py-2">
            <img src="https://iteam.ru/landing/template/img/mp_ychet.png" class="w-75">
          </div>
          <div class="card-footer bg-primary text-white">
            Разрабатываем план маркетинга на 2018 год
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-6 p-2">
      <a href="#" class="text-white">
        <div class="card">
          <div class="card-body text-center py-2">
            <img src="https://iteam.ru/landing/template/img/mk30.png" class="w-75">
          </div>
          <div class="card-footer bg-primary text-white">
            Разрабатываем план маркетинга на 2018 год
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-6 p-2">
      <a href="#" class="text-white">
        <div class="card">
          <div class="card-body text-center py-2">
            <img src="https://iteam.ru/landing/template/img/mp_nalogi.png" class="w-75">
          </div>
          <div class="card-footer bg-primary text-white">
            Разрабатываем план маркетинга на 2018 год
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-2 col-md-3 col-sm-6 p-2">
      <a href="#" class="text-white">
        <div class="card">
          <div class="card-body text-center py-2">
            <img src="https://iteam.ru/landing/template/img/mp_ychet.png" class="w-75">
          </div>
          <div class="card-footer bg-primary text-white">
            Разрабатываем план маркетинга на 2018 год
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-2 d-none d-xl-block p-2">
      <a href="#" class="text-white">
        <div class="card">
          <div class="card-body text-center py-2">
            <img src="https://iteam.ru/landing/template/img/mk30.png" class="w-75">
          </div>
          <div class="card-footer bg-primary text-white">
            Разрабатываем план маркетинга на 2018 год
          </div>
        </div>
      </a>
    </div>
    <div class="col-xl-2 d-none d-xl-block p-2">
      <a href="#" class="text-white">
        <div class="card">
          <div class="card-body text-center py-2">
            <img src="https://iteam.ru/landing/template/img/mp_nalogi.png" class="w-75">
          </div>
          <div class="card-footer bg-primary text-white">
            Разрабатываем план маркетинга на 2018 год
          </div>
        </div>
      </a>
    </div>
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
    <div class="col-lg-4 col-md-12 mt-2">
      <p class="font-weight-bold">
        <a target="_blank" href="http://blog.iteam.ru/2018/04/19/%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9-%D1%83%D1%87%D0%B5%D1%82-%D0%BE%D1%82-%D1%81%D0%BB%D0%BE%D0%B2%D0%B0-%D1%83%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D1%8F-5/">Управленческий учет от&nbsp;слова управлять. Часть&nbsp;5. Финансовый директор и&nbsp;продажи.</a>
      </p>
      <p>Насколько компании нужен управленческий учет?
        &laquo;Вопрос с&nbsp;места&raquo; затронул важную тему&nbsp;&mdash; отвечает&nbsp;ли финансовый директор за&nbsp;рост продаж. Как может управленческий учет стимулировать бизнес?
        Этой теме посвящена 5-ая часть цикла &laquo;Управленка от&nbsp;слова управлять&raquo;.</p>
    </div>
    <div class="col-lg-4 col-md-6 mt-2">
      <p class="font-weight-bold">
        <a target="_blank" href="http://blog.iteam.ru/2018/03/28/%d1%83%d0%bf%d1%80%d0%b0%d0%b2%d0%bb%d0%b5%d0%bd%d1%87%d0%b5%d1%81%d0%ba%d0%b8%d0%b9-%d1%83%d1%87%d0%b5%d1%82-%d0%be%d1%82-%d1%81%d0%bb%d0%be%d0%b2%d0%b0-%d1%83%d0%bf%d1%80%d0%b0%d0%b2%d0%bb%d1%8f-4/">Управленческий учет от&nbsp;слова управлять. Часть&nbsp;4. Хотели как лучше</a>
      </p>
      <p>А&nbsp;для чего, собственно, нужен управленческий учет? Как управлять при помощи такого инструмента? Как вовлечь в&nbsp;подобный проект смежников&nbsp;&mdash; сотрудников различных подразделений компании?
        Начнем обсуждения с&nbsp;простого примера&nbsp;&mdash; мотивация сотрудников службы продаж.</p>
    </div>
    <div class="col-lg-4 col-md-6 mt-2">
      <p class="font-weight-bold">
        <a target="_blank" href="http://blog.iteam.ru/2018/03/12/%d1%83%d0%bf%d1%80%d0%b0%d0%b2%d0%bb%d0%b5%d0%bd%d1%87%d0%b5%d1%81%d0%ba%d0%b8%d0%b9-%d1%83%d1%87%d0%b5%d1%82-%d0%be%d1%82-%d1%81%d0%bb%d0%be%d0%b2%d0%b0-%d1%83%d0%bf%d1%80%d0%b0%d0%b2%d0%bb%d1%8f-3/">Управленческий учет от&nbsp;слова управлять. Часть&nbsp;3. Единое учетное пространство</a>
      </p>
      <p>Для принятия грамотных и эффективных управленческих решений нужна четкая финансовая картина бизнеса. Экономическая модель, понимаемая всеми руководителями, объединяет бюджеты, прогнозы, производственные планы, продажи, используемые ресурсы и много другой разнородной информации.</p>
    </div>
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