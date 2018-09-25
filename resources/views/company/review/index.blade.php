@extends('layouts.app')

@section('title')
    <title>Отзывы</title>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="container my-5">
                <div class="row">
                    <div class="col">
                        <h1>Отзывы</h1>
                    </div>
                </div>
                @foreach ($reviews as $key => $review)
                    <div class="row mt-5">
                        <div class="col">
                            <div class="speech-bubble-{{ random_int(1,4) }} p-4 shadow-lg">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3 d-none d-sm-none d-md-block {{ ($key % 2 == 0) ? '' : 'order-2' }}">
                                        <img src="{{ getElementsFilePath($review, '') }}" class="img-fluid rounded">
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <blockquote class="blockquote">
                                            <p class="mb-0">&laquo;{{ $review->quote }}&raquo;</p>
                                            <footer class="blockquote-footer mt-3 {{ ($key % 2 == 0) ? 'text-right' : '' }}">{{ $review->author }} / <cite>{{ $review->position }}</cite></footer>
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