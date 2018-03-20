@extends('layouts.app')

@section('content')
    @foreach ($category->pages as $page)
        {{ $page->name }}
    @endforeach
@endsection
