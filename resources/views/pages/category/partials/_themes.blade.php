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