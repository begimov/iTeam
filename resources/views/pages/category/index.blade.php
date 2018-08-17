@extends('layouts.app')

@section('title')
    <title>{{ $category->name }}</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5 mb-4">
                <h1>{{ $category->name }}</h1>
            </div>
        </div>

        <div class="row mb-4 a-white">
            <div class="col">
                @foreach ($themes as $theme)
                    <span class="badge badge-secondary my-1 p-2">
                        <span class="lead">
                            <a href="{{ route('theme.index', ['category' => $category->slug, 'theme' => $theme->slug]) }}">{{ $theme->name }}</a>
                        </span>
                    </span>
                @endforeach
            </div>
        </div>

        @foreach ($category->pages as $page)
            <div class="row mb-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h3><a href="{{ route('pages.show', $page->slug) }}">{{ $page->name }}</a></h3>
                            <p class="lead m-0">{{ $page->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
