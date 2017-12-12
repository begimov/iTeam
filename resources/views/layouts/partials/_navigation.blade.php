<nav class="navbar navbar-expand-lg navbar-light bg-light">
<!-- <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a> -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">Блог</a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Мастер-проекты и мастер-классы
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Мастер-проекты</a>
        </div>
      </li>
      <a class="nav-link" href="{{ route('company.about') }}">Компания</a>
      <a class="nav-link" href="{{ route('company.contact') }}">Контакты</a>
    </li>
  </ul>
  
  <ul class="navbar-nav ml-auto">
  @if (Auth::guest())
    <li class="nav-item">
      <a class="nav-link" href="{{ route('login') }}">@lang('auth.login_btn')</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('register') }}">@lang('auth.register_btn')</a>
    </li>
    @else
    <li class="nav-item dropdown dropdown-menu-right">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('user.dashboard.index') }}">Заказы</a>
        <a class="dropdown-item" href="{{ route('user.profile.settings') }}">Профиль</a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </div>
      </li>
    @endif
  </ul>
</div>
</nav>
