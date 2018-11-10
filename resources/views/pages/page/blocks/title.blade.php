<div class="container-fluid title-container">
  <div class="container">
    <div class="row">
      <div class="col my-5 py-5 text-white text-center text-md-left">
        <h1 class="text-uppercase">{!! $element->data['text'] !!}</h1>
        <h2 class="subtitle mt-3">{!! $element->data['subtext'] !!}</h2>
        @isset($element->data['comment'])
          <h2 class="subtitle mt-3">
            <span class="badge badge-success">
              {!! $element->data['comment'] !!}
            </span>
          </h2>
        @endisset
        @if($page->isMasterProjectPage())
          <h3 class="mt-3"><a href="#mppurchase" class="btn btn-primary btn-lg">КУПИТЬ</a></h3>
        @endif
      </div>
    </div>
  </div>
</div>
