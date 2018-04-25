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
          <h2 class="font-weight-bold text-primary mb-1">Вам подарок!</h2>
          <p class="mb-2 lead">Мастер-класс &laquo;Как улучшить бизнес процессы компании&raquo;</p>
          <form>
            <div class="form-group mb-2">
              <input type="text" class="form-control" placeholder="Имя">
            </div>
            <div class="form-group mb-2">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group mb-2">
              <input type="text" class="form-control" placeholder="Телефон">
            </div>
            <button type="submit" class="btn btn-primary">ПОЛУЧИТЬ</button>
          </form>
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
              <a href="#">Создание стратегии</a>
            </p>
            <p>
              <a href="#">Разработка планов и бюджетов</a>
            </p>
            <p>
              <a href="#">Создание системы управления процессами</a>
            </p>
            <p>
              <a href="#">Управление с помощью BSC</a>
            </p>
            <p>
              <a href="#">Целевое управление</a>
            </p>
          </div>
          <div class="col-lg-3 col-sm-6">
            <img src="{{ asset('img/home/mp_boxes.jpg') }}" class="img-fluid"> </div>
          <div class="col-lg-5 col-sm-12 pt-4 pb-4">
            <h5 class="text-uppercase mb-4 font-weight-bold">что такое мастер-проект?</h5>
            <p>Находим и укрепляем «слабое звено» в цепи бизнес-процессов компании. Слабым звеном могут быть продажи, доставка
              товаров, разработка новых продуктов или другие процессы компании. Мы находим такие процессы и делаем их более
              результативными и эффективными.</p>
            <p>
              <a href="" class="btn btn-light text-uppercase">ОТЗЫВЫ</a>
            </p>
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
        <a href="#">[Мысли вслух] Принадлежит ли компания собственнику?</a>
      </p>
      <p>Каждый собственник хочет видеть свою компанию четко работающей машиной, но мало кому удается приблизиться к этому состоянию,
        достичь же его, пожалуй, невозможно. Все «портят» люди – они непонятливы, неисполнительны, неумелы, медлительны,
        безынициативны … Кажется, найти бы других исполнителей, и все пойдет иначе. На самом же деле, корень проблемы в другом...</p>
    </div>
    <div class="col-lg-4 col-md-6 mt-2">
      <p class="font-weight-bold">
        <a href="#">[Мысли вслух] Принадлежит ли компания собственнику?</a>
      </p>
      <p>Каждый собственник хочет видеть свою компанию четко работающей машиной, но мало кому удается приблизиться к этому состоянию,
        достичь же его, пожалуй, невозможно. Все «портят» люди – они непонятливы, неисполнительны, неумелы, медлительны,
        безынициативны … Кажется, найти бы других исполнителей, и все пойдет иначе. На самом же деле, корень проблемы в другом...</p>
    </div>
    <div class="col-lg-4 col-md-6 mt-2">
      <p class="font-weight-bold">
        <a href="#">[Мысли вслух] Принадлежит ли компания собственнику?</a>
      </p>
      <p>Каждый собственник хочет видеть свою компанию четко работающей машиной, но мало кому удается приблизиться к этому состоянию,
        достичь же его, пожалуй, невозможно. Все «портят» люди – они непонятливы, неисполнительны, неумелы, медлительны,
        безынициативны … Кажется, найти бы других исполнителей, и все пойдет иначе. На самом же деле, корень проблемы в другом...</p>
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