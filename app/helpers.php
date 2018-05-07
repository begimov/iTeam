<?php
if (!function_exists('getElementsFile')) {
	function getElementsFilePath($element, $fileTag)
	{
		$file = $element->files->where('id', $element->data['files'][$fileTag])->first();
	
		return $file ? config('urls.files.page_elements_files') 
			. '/' . $file->created_at->toDateString() 
			. '/' . $file->name : '';
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