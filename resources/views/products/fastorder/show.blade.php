@extends('layouts.app')

@section('title')
    <title>Ваш заказ - {{ $order->product->name }}</title>
@endsection

@section('content')
    <div class="container">
        @if($order->isPaid())
            <div class="row mt-5 mb-3">
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
                                                    . '/' . base64_encode($order->created_at) 
                                                    . '/files/' . $file->id }}">{{ $file->original_name ?: $file->name }}</a> - {{ round($file->size/1024) }} Kb
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="row mt-5 mb-3 justify-content-center">
            <fast-order :order="{{ $order }}" 
                :success-url=`{{ url()->current() }}` />
            </div>
        @endif
    </div>
@endsection
