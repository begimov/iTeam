<?php
if (!function_exists('getElementsFile')) {
	function getElementsFilePath($element, $fileTag)
	{
		$file = $element->files->where('id', $element->data['files'][$fileTag])->first();
	
		return config('urls.files.page_elements_files') 
			. '/' . $file->created_at->toDateString() 
			. '/' . $file->name;
	}
}