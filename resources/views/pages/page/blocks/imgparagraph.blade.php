<div class="container">
  <div class="row my-4">
    <div class="{{ 'col-md-4 text-center text-md-left'
      .((isset($element->data['reversed']) && $element->data['reversed']) ? ' order-md-last' : '') }}">
      <img src="{{ getElementsFilePath($element, 'img1') }}" class="img-fluid rounded">
    </div>

    @if(isset($element->data['isCard']) && $element->data['isCard'])
    <div class="col-md-8 align-self-center lead mt-4 mt-sm-4 mt-md-0">
      <div class="card card-default">
        <div class="card-body">
          {!! $element->data['text'] !!}
        </div>
      </div>
    </div>
    @else
    <div class="col-md-8 align-self-center lead mt-4 mt-sm-4 mt-md-0">
      {!! $element->data['text'] !!}
    </div>
    @endif
  </div>
</div>