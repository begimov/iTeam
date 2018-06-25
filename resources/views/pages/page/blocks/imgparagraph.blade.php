<div class="row my-4">
  <div class="col-md-4">
    <img src="{{ getElementsFilePath($element, 'img1') }}" class="img-fluid">
  </div>

  @if(isset($element->data['isCard']) && $element->data['isCard'])
  <div class="col-md-8 align-self-center lead">
    <div class="card card-default">
      <div class="card-body">
        {!! $element->data['text'] !!}
      </div>
    </div>
  </div>
  @else
  <div class="col-md-8 align-self-center lead">
    {!! $element->data['text'] !!}
  </div>
  @endif
</div>