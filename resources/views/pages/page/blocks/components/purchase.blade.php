<div class="card purchase-card h-100{{isset($index) && $index == 1 ? ' border-primary' : ''}}">
    <div class="card-header{{isset($index) && $index == 1 ? ' bg-primary' : ' bg-dark'}} text-light text-center lead">
        @isset($element['data']['title'])
            {{ $element['data']['title'] }}
        @endisset
    </div>
    @isset($element['data']['description'])
        <div class="card-body">
            {!! $element['data']['description'] !!}
        </div>
    @endisset
    <div class="text-center card-footer bg-white">
        @isset($element['data']['originalPrice'])
            <h3><s>{{ $element['data']['originalPrice'] }}</s></h3>
        @endisset
        @if(($productPrice = getProductPrice($element)) > 0)
            <h2><span class="badge badge-info price-badge">{{ round($productPrice) }}~</span></h2>
        @else
            <h3><span class="badge badge-info price-badge">БЕСПЛАТНО</span></h3>
        @endif
        <form action="{{ !auth()->user() && !empty($isFastOrder) ? route('fastorders.store') : route('orders.store') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="product_id" value="{{ $element['productId'] }}">
            <input type="hidden" name="price_tag_id" value="{{ $element['pricetagId'] }}">
            @if($element['isBundle'])
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
            <button type="submit" class="btn btn-primary btn-lg">КУПИТЬ</button>          
        </form>
    </div>
</div>