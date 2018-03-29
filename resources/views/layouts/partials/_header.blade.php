<!-- HEADER -->
<div class="container-fluid">
    <div class="row p-4">
        <div class="col-lg-2 text-lg-left text-center">
          <a href="{{ route('home') }}"><img src="{{ asset('img/header_logo.png') }}" alt="iTeam logo"></a>
        </div>
        <div class="col-lg-6 align-self-center py-3 py-lg-0">
            <ul class="list-inline m-0 text-lg-left text-center">
                <li class="list-inline-item font-weight-bold m-0 pr-2">@lang('partials.header.phone')</li>
                <li class="list-inline-item font-weight-normal m-0"><a href="{{ config('urls.mail.info') }}">@lang('partials.header.email')</a></li>
            </ul>
        </div>
        <div class="col-lg-4 text-lg-right text-center">
            @if (Auth::guest())
                <ul class="list-inline m-0">
                    <li class="list-inline-item m-0 pr-1"><a href="{{ route('login') }}" class="btn btn-light text-uppercase">@lang('partials.header.signin')</a></li>
                    <li class="list-inline-item m-0"><a href="{{ route('register') }}" class="btn btn-primary text-uppercase">@lang('partials.header.registration')</a></li>
                </ul>
            @else
            <div class="dropdown" style="z-index:9999;">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('user.dashboard.index') }}">@lang('partials.navigation.orders')</a>
                    <a class="dropdown-item" href="{{ route('user.profile.settings') }}">@lang('partials.navigation.profile')</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">@lang('auth.logout')</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>  