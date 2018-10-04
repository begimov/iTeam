<div class="container-fluid mt-4">
    <div class="row">
        <div class="col">
            <h5 class="text-uppercase font-weight-bold my-5">популярные мастер-классы</h5>
        </div>
    </div>
    <div class="row">
        @foreach($mks as $index => $page)
            @if($index < 4)
                <div class="col-xl-2 col-md-3 col-sm-6 p-2">
                    <a href="{{ route('pages.show', $page->slug) }}" class="text-white">
                    <div class="card h-100">
                        <div class="card-body text-center py-2">
                            @if(isset($page->elements[1]))
                                <img src="{{ getElementsFilePath($page->elements[1], 'img1') }}" class="w-75">
                            @else
                                <img src="/img/home/template_box.png" class="w-75">
                            @endif
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
                    <div class="card h-100">
                        <div class="card-body text-center py-2">
                            @if(isset($page->elements[1]))
                                <img src="{{ getElementsFilePath($page->elements[1], 'img1') }}" class="w-75">
                            @else
                                <img src="/img/home/template_box.png" class="w-75">
                            @endif
                        </div>
                        <div class="card-footer bg-primary text-white">
                            {{ $page->name }}
                        </div>
                    </div>
                    </a>
                </div>
            @endif
        @endforeach
    </div>
</div>