<?php
if (!function_exists('getElementsFilePath')) {
	function getElementsFilePath($element, $fileTag)
	{
		if (is_object($element) && isset($element->data['files'][$fileTag])) {
			$file = $element->files
				->where('id', $element->data['files'][$fileTag])
				->first();
		}

		if (is_array($element) && isset($element['files'][$fileTag])) {
			$file = \App\Models\Content\File::
				where('id', $element['files'][$fileTag])
				->first();
		}

		return isset($file) 
			? config('urls.files.page_elements_files') 
				. '/' . $file->created_at->toDateString() 
				. '/' . $file->name 
			: '';
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