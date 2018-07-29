<div class="container">
  <div class="row my-4 justify-content-center">
    @foreach($element->data['products'] as $product)
        <div class="col-xl-4 col-lg-6 col-md-6 mt-2">
            @component('pages.page.blocks.components.purchase', ['element' => $product])
            @endcomponent
        </div>
    @endforeach
  </div>
</div>