<?php

namespace App\Http\Controllers\Webapi\Content;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Content\File;
use App\Http\Traits\Downloads;

class FileController extends Controller
{
    use Downloads;

    public function show(File $file)
    {
        $this->authorize('download', $file);
        
        return $this->downloadMaterialFile($file);
    }
}