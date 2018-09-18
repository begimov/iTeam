@extends('layouts.app')

@section('title')
    <title>Консалтинговые проекты</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
                <h1>Консалтинговые проекты</h1>
            </div>
        </div>

        <div class="row" id="projects-container">

            <div class="col-xl-4 col-lg-6 mt-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title">Компания &laquo;АСТ&raquo; г. Краснодар</h5>
                        <p class="card-text">
                            Дистрибуция сельскохозяйственной и&nbsp;дорожно-строительной техники
                        </p>
                        <button type="button" class="btn btn-primary" data-toggle="popover" data-placement="top" data-trigger="click" 
                            data-content="<ul class='mb-1'>
                                    <li>Разработка Положения об организационной структуре</li>
                                    <li>Разработка показателей KPI</li>
                                </ul>">Подробнее</button>
                    </div>
                    <div class="card-footer bg-white">
                        <a href="https://act.su" target="_blank">https://act.su</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('postJquery')
    $('[data-toggle="popover"]').popover({
        html: true
    })
    $('[data-toggle="popover"]').on('shown.bs.popover', function () {
        $(this).append( "<div id='projects-popover-bg' class='w-100 h-100' style='position:fixed;left:0;top:0;background-color:#00000099;'>&nbsp;</div>" )
    })
    $('[data-toggle="popover"]').on('hidden.bs.popover', function () {
        $('#projects-popover-bg').remove()
    })
@endsection