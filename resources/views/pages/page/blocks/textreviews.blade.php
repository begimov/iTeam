<div class="container my-5">
  <div class="row text-center">
    <div class="col">
        <h2>Отзывы наших участников:</h2>
    </div>
  </div>
  @foreach ($element->data['reviews'] as $key => $review)
    <div class="row mt-4">
      <div class="col-lg-1 col-md-2 col-sm-2 col-3">
        <img src="{{ getElementsFilePath($review, 'avatar', $element) }}" class="img-fluid rounded-circle">
      </div>
      <div class="col-lg-11 col-md-10 col-sm-10 col-9">
        <blockquote class="blockquote">
          <p class="mb-0">{!! $review['text'] !!}</p>
          <footer class="blockquote-footer mb-4">{{$review['name']}}</footer>
        </blockquote>
      </div>
    </div>
  @endforeach
</div>
