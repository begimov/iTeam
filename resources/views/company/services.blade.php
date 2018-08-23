@extends('layouts.app')

@section('title')
    <title>О Консалтинговой компании iTeam</title>
@endsection

@section('content')
     <!-- TOP -->
     <div class="container-fluid">
        <div class="row">
            <div class="col py-5">
                <div class="row">
                    <div class="col align-self-center text-center py-4">
                        <h2 class="mb-3 font-weight-bold text-primary">О&nbsp;Консалтинговой компании iTeam</h2>
                        <h4 class="mb-3 font-weight-bold">Мы&nbsp;помогаем руководителям и&nbsp;собственникам создать эффективную систему управления в&nbsp;их&nbsp;компаниях.</h4>
                        <h4 class="mb-3 font-weight-normal">Наши технологии и&nbsp;методики составляют систему управления Русский Менеджмент.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RU MANAGEMENT -->
    <div class="container-fluid p-0">
        <div class="row text-white">
            <div class="col-lg-6 bg-dark text-center py-5">
                <h2 class="font-weight-light mb-4">Русский Менеджмент это:</h2>
                <div class="row">
                    <div class="col-sm-5 text-right">
                        <h4><span class="badge badge-primary text-uppercase font-weight-normal p-3">Стратегия</span></h4>
                        <h4><span class="badge badge-primary text-uppercase font-weight-normal p-3">Ценности</span></h4>
                    </div>
                    <div class="col-sm-2 p-0 align-self-center">
                        <h4><span class="badge badge-primary text-uppercase font-weight-normal p-3">ЦЕЛИ</span></h4>
                    </div>
                    <div class="col-sm-5 text-left">
                        <h4><span class="badge badge-primary text-uppercase font-weight-normal p-3">ОРГСТРУКТУРА</span></h4>
                        <h4><span class="badge badge-primary text-uppercase font-weight-normal p-3">процессы</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 bg-primary py-5">
                <h3 class="font-weight-light mb-4">С 2002 года мы <small class="font-weight-light">обучили</small></h3>
                <h3 class="font-weight-bold">50 тысяч <small class="font-weight-light">управленцев,</small></h3>
                <h3 class="font-weight-bold"><small class="font-weight-light">осуществили</small> 200 <small class="font-weight-light">консалтинговых проектов,</small></h3>
                <h3 class="font-weight-bold"><small class="font-weight-light">создали</small> 50 <small class="font-weight-light">мастер-классов и&nbsp;мастер-проектов</small></h3>
            </div>
        </div>
    </div>

    <!-- MISSION & PHILOSOPHY -->
    <div class="container-fluid mission">
        <mission-philosophy/>
    </div>

    <!-- SERVICES -->
    <div class="container-fluid">
        <company-services/>
    </div>
    <div class="container-fluid bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col text-center py-4">
                    Организация&nbsp;&mdash; это не&nbsp;люди и&nbsp;не&nbsp;активы. Организация&nbsp;&mdash; это система соглашений между людьми, а&nbsp;именно соглашений о&nbsp;целях, стратегии, структуре, процессах и&nbsp;ценностях. Если организация не&nbsp;здорова, значит не&nbsp;налажены или нарушены те&nbsp;или иные соглашения.<br>
                    Наша задача как консультантов помочь руководителям компании выявить проблемные зоны, найти пути решения и&nbsp;оказать поддержку в&nbsp;ходе реализации программы организационных изменений.  
                </div>
            </div>
        </div>
    </div>

    <!-- CLIENTS -->
    <div class="container pt-5">
        <div class="row">
            <div class="col text-center">
                <h2 class="font-weight-light mb-3">Клиенты</h2>
                <p class="lead">Мы&nbsp;гордимся успехами наших клиентов, ведь почти каждая компания, с&nbsp;которой мы&nbsp;работали или работаем, является лидером на&nbsp;своем рынке. Мы&nbsp;не&nbsp;приписываем себе эти достижения, но&nbsp;в&nbsp;них есть и&nbsp;наш вклад.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white">
        <div class="row text-center">
            <div class="col-lg-2 col-md-4 col-sm-6 p-3 align-self-center">
                <a tabindex="0" 
                    style="cursor:pointer;"
                    data-toggle="popover" 
                    data-trigger="focus"
                    data-placement="bottom" 
                    data-content="Илим &mdash; крупнейший в России производитель целлюлозы и бумажной продукции">
                    <img src="{{ asset('img/company/services/clients/ilim.png') }}" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-3 align-self-center">
                <a tabindex="0" 
                    style="cursor:pointer;"
                    data-toggle="popover" 
                    data-trigger="focus"
                    data-placement="bottom" 
                    data-content="КАМАЗ &mdash; российский лидер по производству грузовых автомобилей">
                    <img src="{{ asset('img/company/services/clients/kamaz.png') }}" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-3 align-self-center">
                <a tabindex="0" 
                    style="cursor:pointer;"
                    data-toggle="popover" 
                    data-trigger="focus"
                    data-placement="bottom" 
                    data-content="ПрактикМед &mdash; один из ведущих поставщиков материалов для медицинских учреждений">
                    <img src="{{ asset('img/company/services/clients/praktik_med.png') }}" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-3 align-self-center">
                <a tabindex="0"
                    style="cursor:pointer;"
                    data-toggle="popover" 
                    data-trigger="focus"
                    data-placement="bottom" 
                    data-content="Лапоток &mdash; быстро растущая федеральная сеть магазинов обуви">
                    <img src="{{ asset('img/company/services/clients/lapotok.png') }}" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-3 align-self-center">
                <a tabindex="0"
                    style="cursor:pointer;"
                    data-toggle="popover" 
                    data-trigger="focus"
                    data-placement="bottom" 
                    data-content="Миррико &mdash; лидирующая сервисная компания на рынке нефтедобычи">
                    <img src="{{ asset('img/company/services/clients/mirriko.png') }}" class="img-fluid">
                </a>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-3 align-self-center">
                <a tabindex="0" 
                    style="cursor:pointer;"
                    data-toggle="popover" 
                    data-trigger="focus"
                    data-placement="bottom" 
                    data-content="Vis-à-vis &mdash; крупнейшая федеральная сеть магазинов белья и одежды">
                    <img src="{{ asset('img/company/services/clients/visavis.png') }}" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row mt-3 mb-2">
            <div class="col text-center">
                <p><a href="#" class="btn btn-light btn-sm">Смотреть больше</a></p>
            </div>
        </div>
    </div> -->

    <!-- REVIEWS -->
    <div class="container mb-5">
        <div class="row text-center mt-5">
            <div class="col">
                <h2 class="font-weight-light">Отзывы наших клиентов:</h2>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-4 col-md-6 mt-4">
                <h5 class="mb-3">Александр Красный, «ГаРус»</h5>
                <youtube-player 
                    video-id="Rp4Jh-DP7is"
                    bg-img="/img/pages/videoreviews/videoreview_01.jpg"
                ></youtube-player>
            </div>
            <div class="col-lg-4 col-md-6 mt-4">
                <h5 class="mb-3">Александр Соловьев, «FIS»</h5>
                <youtube-player 
                    video-id="U4QFO0ILnmE"
                    bg-img="/img/pages/videoreviews/videoreview_02.jpg"
                ></youtube-player>
            </div>
            <div class="col-lg-4 col-md-6 mt-4">
                <h5 class="mb-3">Геннадий Черкасов, «Миг Плюс»</h5>
                <youtube-player 
                    video-id="C2MVqTRj40w"
                    bg-img="/img/pages/videoreviews/videoreview_03.jpg"
                ></youtube-player>
            </div>
            <div class="col-lg-4 col-md-6 mt-4">
                <h5 class="mb-3">Яна Ходак, «МК Практик»</h5>
                <youtube-player 
                    video-id="rlzpDK1my58"
                    bg-img="/img/pages/videoreviews/videoreview_04.jpg"
                ></youtube-player>
            </div>
            <div class="col-lg-4 col-md-6 mt-4">
                <h5 class="mb-3">Артем Агабеков, «Фабрика Окон»</h5>
                <youtube-player 
                    video-id="WWzZ19ZCCE8"
                    bg-img="/img/pages/videoreviews/videoreview_05.jpg"
                ></youtube-player>
            </div>
            <div class="col-lg-4 col-md-6 mt-4">
                <h5 class="mb-3">Андрей Черкасов, «Миг Плюс»</h5>
                <youtube-player 
                    video-id="MS8oCP5dIjc"
                    bg-img="/img/pages/videoreviews/videoreview_06.jpg"
                ></youtube-player>
                </div>
        </div>
    </div>
@endsection

@section('postJquery')
    @parent
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
@endsection