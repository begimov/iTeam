<div class="container my-5">
  <div class="row text-center">
    <div class="col">
        <h2>Отзывы наших участников:</h2>
    </div>
  </div>
  @foreach ($element->data['reviews'] as $key => $review)
    <div class="row mt-4">
      <div class="col-md-1 col-sm-2">
        <img src="{{ getElementsFilePath($element, 'avatar') }}" class="img-fluid rounded">
      </div>
      <div class="col-md-11 col-sm-10">
        <blockquote class="blockquote">
          <p class="mb-0">{!! $review['text'] !!}</p>
          <footer class="blockquote-footer mb-4">{{$review['name']}}</footer>
        </blockquote>
      </div>
    </div>
  @endforeach
</div>
