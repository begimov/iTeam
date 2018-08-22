<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h5 class="text-uppercase font-weight-bold my-5">Статьи</h5>
        </div>
    </div>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-xl-4 col-lg-6 mt-2">
                <p class="font-weight-bold">
                    <a target="_blank" href="{{ $post->link }}">
                        {{ $post->title->rendered }}
                    </a>
                </p>
                {!! str_limit($post->excerpt->rendered, 200) . '</p>' !!}
            </div>
        @endforeach
    </div>
</div>
