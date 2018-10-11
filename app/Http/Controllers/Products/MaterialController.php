<?php

namespace App\Http\Controllers\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products\Material;
use App\Models\Content\File;
use App\Http\Traits\Downloads;

class MaterialController extends Controller
{
    use Downloads;

    public function show(Material $material, $accessCode)
    {
        $material->load('files', 'resources');

        return view('products.material.show', compact('material', 'accessCode'));
    }

    public function download(Material $material, $accessCode, File $file)
    {
        return $this->downloadMaterialFile($file);
    }
}
