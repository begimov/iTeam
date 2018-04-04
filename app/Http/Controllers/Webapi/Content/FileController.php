<?php

namespace App\Http\Controllers\Webapi\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Content\File;

class FileController extends Controller
{
    public function show(File $file)
    {
        // TODO: validation user paid for product which has current file in its materials
        $path = storage_path('app/files/materials/id_' . $file->material->id . '/' . $file->name);
        dd($path);
    }
}