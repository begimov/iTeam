<div class="row">
  <div class="panel panel-default">
    <div class="panel-body">
      <strong>Image and text</strong>
        <p>Путь: {{ $element->data['imgId'] }}</p>
        <img src="{{ App\Models\Content\File::find($element->data['imgId'])->name }}">
        <p>Имя: {{ $element->data['name'] }}</p>
        <p>Ссылка: {{ $element->data['link'] }}</p>
    </div>
  </div>
</div>
