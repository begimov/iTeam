@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5 mb-4">
                <h1>{{ $product->name }}</h1>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                @foreach ($product->materials as $material)
                    <div class="card mb-3">
                        <div class="card-header pb-1"><h2>{{ $material->name }}</h2></div>
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
                                            <a href="{{ '/products/' . $product->id 
                                                . '/materials/' . $material->id 
                                                . '/files/' . $file->id }}">{{ $file->name }}</a> - {{ round($file->size/1024) }} Kb
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
