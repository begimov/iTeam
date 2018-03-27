@extends('layouts.app')

@section('content')
     <!-- TOP -->
     <div class="container-fuild">
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
    <div class="container-fuild">
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
    <div class="container-fuild mission">
        <div class="container py-5">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-light mb-3">Миссия</h2>
                    <p class="lead">Мы&nbsp;видим свое предназначение в&nbsp;преодолении дефицита управления, который препятствует развитию многих тысяч российских предприятий.</p>
                    <p><img src="{{ asset('img/home/btn_play.png') }}" width="100"></p>  
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <p class="lead">Управленческая незрелость организаций на&nbsp;всех уровнях&nbsp;&mdash; от&nbsp;малых фирм до&nbsp;крупных корпораций и&nbsp;государственных учреждений&nbsp;&mdash; ключевая национальная проблема. Помогая организациям построить их&nbsp;деятельность разумно и&nbsp;целесообразно, мы&nbsp;повышаем экономический потенциал нашей Родины, вносим свой вклад в&nbsp;повышение качества жизни наших соотечественников.</p>
                </div>
                <div class="col-md-6">
                    <p>Обучая и&nbsp;консультируя собственников и&nbsp;руководителей компаний, мы&nbsp;помогаем им&nbsp;распутать клубок управленческих проблем и&nbsp;найти ясное системное решение.</p>

                    <p>Для нас нет барьеров между дисциплинами менеджмента. Мы&nbsp;видим организацию как единую систему и&nbsp;применяем инженерный подход к&nbsp;проведению организационных изменений, сочетающий творческий поиск и&nbsp;аналитический инструментарий.</p>
                            
                    <p>Мы&nbsp;стремимся сделать Русский Менеджмент мировым брендом, образцом для управления организациями во&nbsp;всем мире!</p>
                </div>
            </div>
        </div>
    </div>

    <!-- SERVICES -->
    <div class="container-fuild">
        <div class="container py-5">
            <div class="row">
                <div class="col text-center">
                    <h2 class="font-weight-light mb-3">Услуги</h2>
                    <p class="lead">Мы&nbsp;работаем с&nbsp;управленческими командами предприятий как наставники, помогая выработать и&nbsp;осуществить на&nbsp;практике решения, изменяющие компанию, чтобы преобразовать ее&nbsp;в&nbsp;эффективную систему, способную противостоять любым конкурентам на&nbsp;любых рынках.</p>
                    <p class="text-primary font-weight-normal py-2">
                        <span class="lead font-weight-bold text-primary">Организационные изменения охватывают пять направлений.</span><br>
                        Эти направления взаимосвязаны и&nbsp;при осуществлении любого из&nbsp;них затрагиваются все остальные.
                    </p>
                    <p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><img src="{{ asset('img/company/services/services_01.png') }}"></li>
                            <li class="list-inline-item"><img src="{{ asset('img/company/services/services_02.png') }}"></li>
                            <li class="list-inline-item"><img src="{{ asset('img/company/services/services_03.png') }}"></li>
                            <li class="list-inline-item"><img src="{{ asset('img/company/services/services_04.png') }}"></li>
                            <li class="list-inline-item"><img src="{{ asset('img/company/services/services_05.png') }}"></li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-4 services-01">&nbsp;</div>
                <div class="col-lg-8 p-3">
                    <h4 class="font-weight-normal mb-3">Создание системы целевого управления</h4>
                    <p>Мы&nbsp;помогаем руководителям предприятий построить все четыре уровня системы целевого управления:</p>
                    <ul>
                        <li>Создать миссию компании&nbsp;&mdash; цель высшего уровня, которая определяет смысл деятельности компании.</li>
                        <li>Разработать Сбалансированную систему показателей, направляющую все действия компании к&nbsp;ее&nbsp;стратегическим целям.</li>
                        <li>Наладить систему годового планирования и&nbsp;контроля исполнения планов</li>
                        <li>Внедрить KPI сотрудников, связанные со&nbsp;стратегическими и&nbsp;тактическими целями компании.</li>
                    </ul>
                    <p>В&nbsp;ходе построения системы целевого управления мы&nbsp;уделяем особое внимание взаимным связям всех уровней, а&nbsp;также их&nbsp;взаимодействию с&nbsp;другими компонентами системы управления компанией: стратегией, процессами, структурой, корпоративной культурой.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fuild bg-dark text-white">
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
    <div class="container-fluid pb-5">
        <div class="row text-center">
            <div class="col-lg-2 col-md-4 col-sm-6 p-1">
                <div class="card h-100">
                    <div class="card-body">
                        <a tabindex="0" 
                            data-toggle="popover" 
                            data-trigger="focus"
                            data-placement="bottom" 
                            data-content="And here's some amazing content. It's very engaging. Right?">
                            <img src="{{ asset('img/company/services/clients/ilim.png') }}" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-1">
                <div class="card h-100">
                    <div class="card-body">
                        <a tabindex="0" 
                            data-toggle="popover" 
                            data-trigger="focus"
                            data-placement="bottom" 
                            data-content="And here's some amazing content. It's very engaging. Right?">
                            <img src="{{ asset('img/company/services/clients/kamaz.png') }}" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-1">
                <div class="card h-100">
                    <div class="card-body">
                        <a tabindex="0" 
                            data-toggle="popover" 
                            data-trigger="focus"
                            data-placement="bottom" 
                            data-content="And here's some amazing content. It's very engaging. Right?">
                            <img src="{{ asset('img/company/services/clients/praktik_med.png') }}" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-1">
                <div class="card h-100">
                    <div class="card-body">
                        <a tabindex="0" 
                            data-toggle="popover" 
                            data-trigger="focus"
                            data-placement="bottom" 
                            data-content="And here's some amazing content. It's very engaging. Right?">
                            <img src="{{ asset('img/company/services/clients/lapotok.png') }}" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-1">
                <div class="card h-100">
                    <div class="card-body">
                        <a tabindex="0" 
                            data-toggle="popover" 
                            data-trigger="focus"
                            data-placement="bottom" 
                            data-content="And here's some amazing content. It's very engaging. Right?">
                            <img src="{{ asset('img/company/services/clients/mirriko.png') }}" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-1">
                <div class="card h-100">
                    <div class="card-body">
                        <a tabindex="0" 
                            data-toggle="popover" 
                            data-trigger="focus"
                            data-placement="bottom" 
                            data-content="And here's some amazing content. It's very engaging. Right?">
                            <img src="{{ asset('img/company/services/clients/visavis.png') }}" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <p><a href="#" class="btn btn-light btn-sm">Смотреть больше</a></p>
            </div>
        </div>
    </div>

    <!-- REVIEWS -->
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col text-center">
                <h2 class="font-weight-light mb-3">Отзывы</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Rp4Jh-DP7is" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/U4QFO0ILnmE" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/C2MVqTRj40w" frameborder="0" allowfullscreen></iframe>
                </div>
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