<!-- HEADER -->
<div class="container-fluid">
    <div class="row p-4">
        <div class="col-lg-2 text-lg-left text-center">
          <img src="{{ asset('img/header_logo.png') }}" alt="iTeam logo"></div>
        <div class="col-lg-6 align-self-center py-3 py-lg-0">
            <ul class="list-inline m-0 text-lg-left text-center">
                <li class="list-inline-item font-weight-bold m-0 pr-2">@lang('partials.header.phone')</li>
                <li class="list-inline-item font-weight-normal m-0"><a href="{{ config('urls.mail.info') }}">@lang('partials.header.email')</a></li>
            </ul>
        </div>
        <div class="col-lg-4 text-lg-right text-center">
            <ul class="list-inline m-0">
                <li class="list-inline-item m-0 pr-1"><a href="#" class="btn btn-light text-uppercase">@lang('partials.header.signin')</a></li>
                <li class="list-inline-item m-0"><a href="#" class="btn btn-primary text-uppercase">@lang('partials.header.registration')</a></li>
            </ul>
        </div>
    </div>
</div>  