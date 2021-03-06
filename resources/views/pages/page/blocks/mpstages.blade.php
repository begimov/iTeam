<div class="container-fluid bg-dark my-4">
  <div class="container py-4">
    <div class="row">
      <div class="col">

        <ul class="nav nav-tabs nav-tabs-links" id="myTab" role="tablist">
          @foreach ($element->data['stages'] as $key => $stage)
            <li class="nav-item a-white">
              <a class="nav-link{{ $key === 0 ? ' active' : '' }}" id="{{ $key }}-tab" data-toggle="tab" href="#{{ $key }}" role="tab" aria-controls="{{ $key }}" aria-selected="false">Этап&nbsp;№{{ $key + 1 }}</a>
            </li>
          @endforeach
        </ul>
        
        <div class="tab-content" id="myTabContent">

          @foreach ($element->data['stages'] as $key => $stage)
            <div class="tab-pane fade{{ $key === 0 ? ' show active' : '' }}" id="{{ $key }}" role="tabpanel" aria-labelledby="{{ $key }}-tab">
                <div class="card">
                  <h5 class="card-header bg-primary text-light">{{$stage['name']}}</h5>
                  <div class="card-body">
                    <p class="card-text">
                      {!! $stage['description'] !!}
                    </p>
                  </div>
                </div>
            </div>
          @endforeach

        </div>

      </div>
    </div>
  </div>
</div>
