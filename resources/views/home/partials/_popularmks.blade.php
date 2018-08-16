@foreach($pages as $index => $page)
    @if($index < 4)
    <div class="col-xl-2 col-md-3 col-sm-6 p-2">
        <a href="{{ route('pages.show', $page->slug) }}" class="text-white">
        <div class="card">
            <div class="card-body text-center py-2">
            <img src="https://iteam.ru/landing/template/img/mp_ychet.png" class="w-75">
            </div>
            <div class="card-footer bg-primary text-white">
            {{ $page->name }}
            </div>
        </div>
        </a>
    </div>
    @else
    <div class="col-xl-2 d-none d-xl-block p-2">
        <a href="{{ route('pages.show', $page->slug) }}" class="text-white">
        <div class="card">
            <div class="card-body text-center py-2">
            <img src="https://iteam.ru/landing/template/img/mk30.png" class="w-75">
            </div>
            <div class="card-footer bg-primary text-white">
            {{ $page->name }}
            </div>
        </div>
        </a>
    </div>
    @endif
@endforeach