<div class="row">
  <div class="col">
    <h2>{{ getProductPrice($element->data['product']) }}</h2>
    <p>
    <form action="{{ route('orders.store') }}" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="product_id" value="{{ $element->data['product']['productId'] }}">
      <input type="hidden" name="price_tag_id" value="{{ $element->data['product']['pricetagId'] }}">
      <button type="submit" class="btn btn-primary btn-lg">КУПИТЬ</button>
    </form>
    </p>
  </div>
</div>
