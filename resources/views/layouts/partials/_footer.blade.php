<!-- FOOTER -->
<div class="container-fluid bg-dark text-white block-footer mt-5">
    <div class="row p-5">
        <div class="col-xl-3 col-md-6 col-sm-8">
            <p><h5>@lang('partials.footer.copyright')</h5></p>
            <p>@lang('partials.footer.address')</p>
            <p><span class="lead">@lang('partials.header.phone')</span><br><a href="{{ config('urls.mail.info') }}">@lang('partials.header.email')</a></p>
            <p><a href="">@lang('partials.footer.all_contacts')</a></p>
            <p>
                <a href="">@lang('partials.footer.terms_of_use')</a><br>
                <a href="">@lang('partials.footer.offer')</a>
            </p>
        </div>
        <div class="col-xl-2 col-md-3 col-sm-4">
            <p><h5>Компания</h5></p>
            <p>
                <a href="">Услуги</a><br>
                <a href="">О русском менеджменте</a>
            </p>
        </div>
        <div class="col-xl-2 col-md-3">
            <p><h5>Обучение</h5></p>
            <p>
                <a href="">Статьи</a><br>
                <a href="">Мастер-классы</a><br>
                <a href="">Мастер-проекты</a>
            </p>
        </div>
        <div class="col-xl-3 col-md-6 col-sm-8">
            <p><h5>Соц. сети</h5></p>
            <p>Подписывайтесь и&nbsp;читайте в&nbsp;социальных сетях</p>
            <p>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="{{ config('urls.social.facebook') }}"><img src="{{ asset('img/sn_fb.png') }}"></a></li>
                    <li class="list-inline-item"><a href="{{ config('urls.social.vk') }}"><img src="{{ asset('img/sn_vk.png') }}"></a></li>
                    <li class="list-inline-item"><a href="{{ config('urls.social.instagram') }}"><img src="{{ asset('img/sn_instag.png') }}"></a></li>
                </ul>
            </p>
        </div>
        <div class="col-xl-2 col-md-6 col-sm-4">
            <p><h5>&nbsp;</h5></p>
            <p><a href="{{ config('urls.webmoney.megastock') }}" target="_blank"><img src="{{ asset('img/wm.png') }}" alt="Webmoney"></a></p>
            <p><a href="{{ config('urls.webmoney.payments_info') }}" target="_blank">порядок оплаты</a></p>
        </div>
    </div>
</div>