@extends('layouts.app')

@section('title')
    <title>Ваш заказ - {{ $order->product->name }}</title>
@endsection

@section('content')
    <div class="container">
        @if($order->isPaid())
            <div class="row my-5">
                <div class="col">
                    @foreach ($order->product->materials as $material)
                        <div class="card mb-3">
                            <div class="card-header bg-dark text-light pb-1"><h2>{{ $material->name }}</h2></div>
                            <div class="card-body">
                                @if(count($material->resources) > 0)
                                    <h3>Видео:</h3>
                                    <div class="row mb-4">
                                        @foreach ($material->resources as $resource)
                                            <div class="col-md-4 mt-3">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe width="100%" height="350" 
                                                        src="{{ 'https://www.youtube.com/embed/' . $resource->identifier }}" 
                                                        frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                @if(count($material->files) > 0)
                                    <h3 class="mb-3">Материалы:</h3>
                                    <ul>
                                        @foreach ($material->files as $file)
                                            <li>
                                                <a href="{{ '/fastorders/' . $order->id 
                                                    . '/' . $order->getFastOrderToken()
                                                    . '/files/' . $file->id }}">{{ $file->original_name ?: $file->name }}</a> - {{ round($file->size/1024) }} Kb
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    @endforeach

                    @if(count($order->product->tests) > 0)
                        @foreach ($order->product->tests as $test)
                            <div class="card mt-4 mb-3 bg-dark text-light">
                                <div class="card-header pb-1"><h2>{{ $test->name }}</h2></div>
                                <div class="card-body">
                                    <p class="card-text">{{ $test->description }}</p>
                                    <a href="{{ '/tests/' . $test->id }}" class="btn btn-light" target="_blank">Пройти тест</a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        @else
            <div class="row mt-5 justify-content-center">
            <fast-order :order="{{ $order }}" 
                :success-url=`{{ url()->current() }}` />
            </div>
            <div class="row justify-content-center text-center mb-3">
                <div class="col-lg-8 col-md-10">
                    <div class="card bg-dark text-light">
                        <div class="card-body">
                            <h3>
                                <span class="badge badge-danger">
                                    <strong>Внимание!</strong>
                                </span>
                                <strong><small>После оплаты нажмите кнопку</small> 
                                    <span class="badge badge-success">Вернуться на&nbsp;сайт</span><small> чтобы получить материалы мастер-класса!</small>
                                </strong>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 col-md-10">
                    <div class="card">
                        <div class="card-body">
                            <p>Платежный сервис Wallet One, используемый для оплаты наших продуктов, <span class="font-weight-bold">лицензирован надзорным органом в&nbsp;каждой стране присутствия, а&nbsp;значит, полностью безопасен.</span></p>
                            <p>Wallet One использует стандарт безопасности PCI&nbsp;DSS, SSL-протокол, системы безопасности Verified by&nbsp;Visa и&nbsp;MasterCard SecureCode.</p>
                            <p><a href="https://www.walletone.com/ru/merchant/security/" target="_blank">Подробнее здесь...</a></p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
