<div class="row mb-4 a-white">
    <div class="col">
        <span class="badge badge-secondary my-1 p-2">
            <span class="lead">
                <a href="{{ route('pages.category.index', config('urls.slugs.categories.mk')) }}">Все</a>
            </span>
        </span>
        @foreach ($themes as $theme)
            @if($theme->id !== 6)
                <span class="badge badge-secondary my-1 p-2">
                    <span class="lead">
                        <a href="{{ route('theme.index', ['category' => $category->slug, 'theme' => $theme->slug]) }}">{{ $theme->name }}</a>
                    </span>
                </span>
            @endif
        @endforeach
    </div>
</div>