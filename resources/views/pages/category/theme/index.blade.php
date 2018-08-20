@extends('layouts.app')

@section('title')
    <title>{{ $theme->name }}</title>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col mt-5 mb-4">
                <h1>{{ $theme->name }}</h1>
            </div>
        </div>

        @include('pages.category.partials._themes')

        @foreach ($pages as $page)
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
