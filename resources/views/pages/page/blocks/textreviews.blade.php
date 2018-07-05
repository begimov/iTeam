<div class="container my-5">
  <div class="row text-center">
    <div class="col">
        <h2>Отзывы наших участников:</h2>
    </div>
  </div>
  <div class="row mt-4">
    <div class="col">
      @foreach ($element->data['reviews'] as $key => $review)
        <blockquote class="blockquote">
          <p class="mb-0">{!! $review['text'] !!}</p>
          <footer class="blockquote-footer mb-4">{{$review['name']}}</footer>
        </blockquote>
      @endforeach
    </div>
  </div>
</div>
