@extends('layouts.app')

@section('title')
    <title>Отзывы</title>
@endsection

@section('content')
<div class="container-fluid bg-dark">
    <div class="row">
        <div class="container my-5">
            <div class="row">
                <div class="col">
                    <h1 class="mb-4 text-light">Отзывы</h1>
                </div>
            </div>
            @foreach ($reviews as $review)
            <div class="row">
                <div class="col">
                    <div class="speech-bubble p-3">
                        <div class="row">
                            <div class="col-2">
                                //
                            </div>
                            <div class="col-10">
                                <blockquote class="blockquote">
                                    <p class="mb-0">&laquo;{{ $review->quote }}&raquo;</p>
                                    <footer class="blockquote-footer mt-1 text-right">{{ $review->author }} / <cite>{{ $review->position }}</cite></footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="row">
                <div class="col">
                    {{ $reviews->links("pagination::bootstrap-4") }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection