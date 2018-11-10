<div class="container" id="mppurchase">
  <div class="row my-4 justify-content-center">
    @foreach($element->data['products'] as $index => $product)
        <div class="col-xl-4 col-lg-6 col-md-6 mt-2">
            @component('pages.page.blocks.components.purchase', [
              'element' => $product,
              'isFastOrder' => $product['isFastOrder'] ?? NULL,
              'index' => $index
            ])
            @endcomponent
        </div>
    @endforeach
  </div>
</div>