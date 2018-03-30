<div class="row">
  <div class="col">
  <?php $elementsProduct = \App\Models\Products\Product::find($element->data['product']['productId']) ?>
    <h2>{{ $element->data['product']['pricetagId'] ?: $elementsProduct->price }}</h2>
    <p>
    <form action="{{ route('orders.store') }}" method="POST">
      <input type="hidden" name="product_id" value="$element->data['product']['productId']">
      <input type="hidden" name="price_tag_id" value="$element->data['product']['pricetagId']">
      <button type="submit" class="btn btn-primary btn-lg">КУПИТЬ</button>
    </form>
      <!-- <a 
        class="btn btn-primary btn-lg"
        href="{{ route(
          'user.dashboard.index',
          [
            'product_id' => $element->data['product']['productId'],
            'price_tag_id' => $element->data['product']['pricetagId']
          ]
          )
        }}"
        role="button">
        КУПИТЬ</a> -->
    </p>
  </div>
</div>
