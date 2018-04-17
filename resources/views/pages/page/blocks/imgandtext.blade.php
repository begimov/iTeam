<div class="row">
  <div class="col-md-2">
    <img src="{{ getElementsFilePath($element, 'img1') }}" class="img-fluid">
  </div>
  <div class="col-md-10">
    <p>Название: {{ $element->data['name'] }}</p>
    <p>Ссылка: {{ $element->data['link'] }}</p>
  </div>
</div>