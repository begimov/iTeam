<div class="container" id="purchase">
  <div class="row my-4">
    <div class="{{ 'col-lg-4 text-center text-md-left align-self-center'
      .((isset($element->data['reversed']) && $element->data['reversed']) ? ' order-md-last' : '') }}">
      <img src="{{ getElementsFilePath($element, 'img1') }}" class="img-fluid rounded">
    </div>

    <div class="col-lg-8 my-4 align-self-center">
      @component('pages.page.blocks.components.purchase', [
        'element' => $element->data['product'], 
        'isFastOrder' => $element->data['product']['isFastOrder'] ?? NULL
      ])
      @endcomponent
    </div>
  </div>
</div>