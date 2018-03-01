<div class="row">
  <div class="col-md-12">
    <p>
      <a 
        class="btn btn-primary btn-lg"
        href="{{ route('user.dashboard.index', ['product_id' => $element->data['product']['productId'], 'price_tag_id' => $element->data['product']['pricetagId'] ]) }}"
        role="button">
        BUY</a>
    </p>
  </div>
</div>
