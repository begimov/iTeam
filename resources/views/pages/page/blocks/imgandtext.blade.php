<div class="row">
  <div class="col">
    <img src="{{ $element->files->where('id', $element->data['files']['img1'])[0]->name }}">
    <p>Название: {{ $element->data['name'] }}</p>
    <p>Ссылка: {{ $element->data['link'] }}</p>
  </div>
</div>
