@if(isset($element->data['isCard']) && $element->data['isCard'])
<div class="row my-4">
  <div class="col-md-12 lead">
    <div class="card card-default">
      <div class="card-body">
      {!! $element->data['text'] !!}
      </div>
    </div>
  </div>
</div>
@else
<div class="row my-4">
  <div class="col-md-12 lead">
    {!! $element->data['text'] !!}
  </div>
</div>
@endif
