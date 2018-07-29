<div class="container">
  <div class="row my-4 justify-content-center">
    <div class="col-lg-4 col-md-6 col-sm-8">
    @foreach($element->data['products'] as $product)
      @component('pages.page.blocks.components.purchase', 
        [
            'element' => $product
        ])
      @endcomponent
    @endforeach
    </div>
  </div>
</div>