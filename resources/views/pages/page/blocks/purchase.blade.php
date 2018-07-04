<div class="container">
  <div class="row my-4 justify-content-center">
    <div class="col-lg-4 col-md-6 col-sm-8 text-center">
      <div class="card purchase-card">
        <div class="card-header bg-dark text-light"></div>
        <div class="card-body">
          @if(($productPrice = getProductPrice($element->data['product'])) > 0)
            <h2><span class="badge badge-info price-badge">{{ $productPrice }}~</span></h2>
          @endif
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
                <div class="col-8">  
                  <div class="form-group">
                    <input type="number" min="1" step="1" name="quantity" value="1" class="form-control">
                  </div>
                </div>
              </div>
            @endif
            <button type="submit" class="btn btn-primary btn-lg">ПОЛУЧИТЬ</button>          
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
