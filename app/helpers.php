<?php
if (!function_exists('getElementsFilePath')) {
	function getElementsFilePath($element, $fileTag)
	{
		if (isset($element->data['files'][$fileTag])) {
			$file = $element->files->where('id', $element->data['files'][$fileTag])->first();
		
			return $file ? config('urls.files.page_elements_files') 
				. '/' . $file->created_at->toDateString() 
				. '/' . $file->name : '';
		}
		return '';
	}
}

if (!function_exists('getProductPrice')) {
	function getProductPrice($data)
	{
		$products = app()->make(\App\Repositories\Contracts\Products\ProductRepository::class);

		$product = $products->withCriteria([
            new \App\Repositories\Eloquent\Criteria\With(['priceTags'])
		])->findById($data['productId']);

		if (!$data['pricetagId']) {
			return $product->price;
		}

		$priceTag = $product->priceTags->where('id', $data['pricetagId'])->first();

		return $priceTag->price;
	}
}

if (!function_exists('generateOrderNumber')) {
	function generateOrderNumber($orderId)
	{
		return config('orders.base_order_number') + $orderId;
	}
}