<div class="container-fluid mt-5">
  <div class="row">
    <div class="col">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-6 pt-4 pb-4">
            <h5 class="text-uppercase mb-4 font-weight-bold">мастер-проекты</h5>
            @foreach($mps as $mp)
              <p>
                <a href="{{ route('pages.show', $mp->slug) }}">
                  {{ $mp->name }}
                </a>
              </p>
            @endforeach
          </div>
          <div class="col-lg-3 col-sm-6">
            <img src="{{ asset('img/home/mp_boxes.jpg') }}" class="img-fluid"> </div>
          <div class="col-lg-5 col-sm-12 pt-4 pb-4">
            <h5 class="text-uppercase mb-4 font-weight-bold">что такое мастер-проект?</h5>
            <p>
              <ul>
                <li>Новая форма обучения и&nbsp;консультирования, в&nbsp;котором участвует вся управленческая команда.</li>
                <li>Шаг за&nbsp;шагом под руководством консультанта-наставника вы&nbsp;проходите все этапы.</li>
                <li>Результат мастер-проекта&nbsp;&mdash; &nbsp;обученные сотрудники.</li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>