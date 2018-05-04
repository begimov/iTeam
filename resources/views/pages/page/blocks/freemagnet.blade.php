<div class="row">
  <div class="col">
    <free-magnet 
      title="{{ $element->data['title'] }}"
      description="{{ $element->data['description'] }}"
      campaign-token="{{ $element->data['campaignToken'] }}"
      button-text="{{ $element->data['buttonText'] }}"
      redirect-url="{{ getElementsFilePath($element, 'doc1') }}"
      layout-type="horizontal" />
  </div>
</div>