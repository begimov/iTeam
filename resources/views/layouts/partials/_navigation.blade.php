<!-- NAVIGATION -->
<nav class="navbar sticky-top navbar-dark bg-primary navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-primary" id="navbarTogglerDemo01">
        <ul class="navbar-nav nav-fill mr-auto mt-2 mt-lg-0 justify-content-center w-100 font-weight-normal">
            <li class="nav-item">
                <a class="nav-link text-uppercase text-white" href="{{ config('urls.blog') }}">@lang('partials.navigation.articles')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase text-white" href="{{ route('pages.category.index', config('urls.slugs.categories.mk')) }}">@lang('partials.navigation.mk')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase text-white" href="{{ route('pages.category.index', config('urls.slugs.categories.mp')) }}">@lang('partials.navigation.mp')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase text-white" href="#">@lang('partials.navigation.about_rm')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase text-white" href="{{ route('company.services') }}">@lang('partials.navigation.services')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase text-white" href="{{ route('company.contact') }}">@lang('partials.navigation.contact')</a>
            </li>
        </ul>
    </div>
</nav>