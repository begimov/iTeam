@extends('layouts.app')

@section('title')
    <title>Контакты</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <h1>Контакты</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2 class="my-4">Консалтинговая компания iTeam</h2>

                <h5 class="mb-3">Телефон: 
                    <small class="font-weight-light">
                        @lang('partials.header.phone')
                    </small>
                </h5>

                <h5>E-mail: 
                    <small class="font-weight-light">
                        <a href="{{ config('urls.mail.info') }}">@lang('partials.header.email')</a>
                    </small>
                </h5>

                <h5>Техническая поддержка: 
                    <small class="font-weight-light">
                        <a href="{{ config('urls.mail.support') }}">@lang('partials.contact.support_email')</a>
                    </small>
                </h5>

                <h5>Адрес:<br> 
                    <small class="font-weight-light">
                        123112, г. Москва, Пресненская набережная, 12,<br>
                        Башня Федерация &laquo;Запад&raquo; 45&nbsp;этаж, офис 82
                    </small>
                </h5> 

                <h5>Как доехать:<br>
                    <small class="font-weight-light">
                        м. Деловой Центр<br>
                        Выход к&nbsp;Башне Федерация &laquo;Запад&raquo;<br>
                        Вход в&nbsp;офисный центр справа от&nbsp;входа в&nbsp;&laquo;ВТБ банк&raquo;.<br>
                        На&nbsp;ресепшен сказать, что идете в&nbsp;офис 82&nbsp;на 45&nbsp;этаж.<br>
                        Подняться на&nbsp;лифте на&nbsp;45&nbsp;этаж.
                    </small>
                </h5>
                
            </div>
            <div class="col-lg-6 my-4">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.505057189135!2d37.53464461593042!3d55.74972818055261!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54bdc2341dfc5%3A0xeb91df6a5a130625!2z0J_RgNC10YHQvdC10L3RgdC60LDRjyDQvdCw0LEuLCAxMiwg0JzQvtGB0LrQstCwLCDQoNC-0YHRgdC40Y8sIDEyMzMxNw!5e0!3m2!1sru!2sua!4v1483011906142"
                width="100%" height="600" frameborder="0" style="border:0"
                allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection