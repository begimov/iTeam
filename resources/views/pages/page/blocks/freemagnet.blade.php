<div class="row">
  <div class="col">
    <free-magnet 
      title="{{ $element->data['title'] }}"
      description="{{ $element->data['description'] }}"
      campaign-token="{{ $element->data['campaignToken'] }}"
      button-text="{{ $element->data['buttonText'] }}" />

    {{-- <img src="{{ getElementsFilePath($element, 'img1') }}" class="img-fluid"> --}}
  </div>
</div>