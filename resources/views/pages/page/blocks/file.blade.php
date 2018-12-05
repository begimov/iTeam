<div class="container">
  <div class="row my-4">
    <div class="col text-center">
      @isset($element->data['text'])
        <span class="lead font-weight-bold" style="font-size:140%;">{{ $element->data['text'] }}</span>
      @endif
      <a href="{{ getElementsFilePath($element, 'file1') }}" class="btn btn-primary btn-xl file-download-block-btn" target="_blank" download>СКАЧАТЬ</a>
      
    </div>
  </div>
</div>

@section('postJquery')
    $( ".file-download-block-btn" )[0].click();
@endsection