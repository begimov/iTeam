@extends('layouts.app')

@section('title')
    <title>{{ $theme->name }}</title>
@endsection

@section('content')
    <div class="container mb-5">
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
