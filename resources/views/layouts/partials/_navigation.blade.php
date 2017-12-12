<nav class="navbar navbar-expand-lg navbar-light bg-light">
<!-- <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a> -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
    <li class="nav-item">
      <a class="nav-link" href="#">@lang('partials.navigation.blog')</a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          @lang('partials.navigation.mpmk')
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Мастер-проекты</a>
        </div>
      </li>
      <a class="nav-link" href="{{ route('company.about') }}">@lang('partials.navigation.company')</a>
      <a class="nav-link" href="{{ route('company.contact') }}">@lang('partials.navigation.contact')</a>
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
        <a class="dropdown-item" href="{{ route('user.dashboard.index') }}">@lang('partials.navigation.orders')</a>
        <a class="dropdown-item" href="{{ route('user.profile.settings') }}">@lang('partials.navigation.profile')</a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">@lang('auth.logout')</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
        </div>
      </li>
    @endif
  </ul>
</div>
</nav>
