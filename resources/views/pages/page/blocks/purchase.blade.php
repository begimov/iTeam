<div class="container" id="purchase">
  <div class="row my-4 justify-content-center">
    <div class="col-lg-5 col-md-7 col-sm-10">
      @component('pages.page.blocks.components.purchase', [
        'element' => $element->data['product'], 
        'isFastOrder' => $element->data['product']['isFastOrder'] ?? NULL
      ])
      @endcomponent
    </div>
  </div>
</div>
