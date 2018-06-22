<div class="row my-4">
  <div class="col text-center">
    <h2>{{ getProductPrice($element->data['product']) }}~</h2>
    <p>
    <form action="{{ route('orders.store') }}" method="POST">
      {{ csrf_field() }}
      <input type="hidden" name="product_id" value="{{ $element->data['product']['productId'] }}">
      <input type="hidden" name="price_tag_id" value="{{ $element->data['product']['pricetagId'] }}">
      @if($element->data['product']['isBundle'])
        <div class="row">
          <div class="col">
            <p>X</p>
            <label class="font-weight-bold">Количество:</label>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-2">  
            <div class="form-group">
              <input type="number" min="1" step="1" name="quantity" value="1" class="form-control">
            </div>
          </div>
        </div>
      @endif
      <button type="submit" class="btn btn-primary btn-lg">КУПИТЬ</button>
    </form>
    </p>
  </div>
</div>
