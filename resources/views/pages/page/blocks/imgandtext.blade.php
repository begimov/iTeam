<div class="row">
  <div class="panel panel-default">
    <div class="panel-body">
      <strong>Image and text</strong>
        <p>Id: {{ $element->data['files']['img1'] }}</p>
        <p>File: {{ $element->files[0] }}</p>
        <img src="{{ $element->files->where('id', $element->data['files']['img1'])[0]->name }}">
        <p>Имя: {{ $element->data['name'] }}</p>
        <p>Ссылка: {{ $element->data['link'] }}</p>
    </div>
  </div>
</div>
