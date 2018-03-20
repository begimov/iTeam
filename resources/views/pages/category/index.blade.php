@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $category->name }}</h1>
            </div>
        </div>
        @foreach ($category->pages as $page)
            <div class="row">
                <div class="col">
                    <h3><a href="{{ route('pages.show', $page->id) }}">{{ $page->name }}</a></h3>
                </div>
            </div>
        @endforeach
    </div>
@endsection
