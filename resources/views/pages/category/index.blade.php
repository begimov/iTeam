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

        @if($category->slug != config('urls.slugs.categories.mp'))
            @include('pages.category.partials._themes')
        @endif

        @foreach ($category->pages->take(5) as $key => $page)
            <div class="row mb-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="row align-items-center">
                                <div class="col-md-10 p-3">
                                    <h3><a href="{{ route('pages.show', $page->slug) }}">{{ $page->name }}</a></h3>
                                    <p class="lead m-0">{{ $page->description }}</p>
                                </div>
                                <div class="col-md-2 p-3 text-center">
                                    <h3><span class="badge badge-primary">{{ $page->productPrice() }}</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
