<div class="container my-5">
  <div class="row text-center">
    <div class="col">
        <h2>Отзывы наших участников:</h2>
    </div>
  </div>
  @foreach ($element->data['reviews'] as $key => $review)
    <div class="row mt-4">
      <div class="col-md-2 col-sm-3 col-4">
        <img src="{{ getElementsFilePath($review, 'avatar') }}" class="img-fluid rounded-circle">
      </div>
      <div class="col-md-10 col-sm-9 col-8">
        <blockquote class="blockquote">
          <p class="mb-0">{!! $review['text'] !!}</p>
          <footer class="blockquote-footer mb-4">{{$review['name']}}</footer>
        </blockquote>
      </div>
    </div>
  @endforeach
</div>
