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
		$product = \App\Models\Products\Product::with('priceTags')->find($data['productId']);

		if (!$data['pricetagId']) {
			return $product->price;
		}

		$priceTag = $product->priceTags->where('id', $data['pricetagId'])->first();

		return $priceTag->price;
	}
}