<div class="row text-center my-4">
    <div class="col">
        <h2>Отзывы наших участников:</h2>
    </div>
</div>
<div class="row text-center mb-5">
  <div class="col-md-6 mt-4">
    <h5 class="mb-3">{{$element->data['video1']['author']}}</h5>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$element->data['video1']['id']}}" allowfullscreen></iframe>
    </div>
  </div>
  <div class="col-md-6 mt-4">
    <h5 class="mb-3">{{$element->data['video2']['author']}}</h5>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$element->data['video2']['id']}}" allowfullscreen></iframe>
    </div>
  </div>
  <div class="col-md-6 mt-4">
    <h5 class="mb-3">{{$element->data['video3']['author']}}</h5>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$element->data['video3']['id']}}" allowfullscreen></iframe>
    </div>
  </div>
  <div class="col-md-6 mt-4">
    <h5 class="mb-3">{{$element->data['video4']['author']}}</h5>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{$element->data['video4']['id']}}" allowfullscreen></iframe>
    </div>
  </div>
</div>