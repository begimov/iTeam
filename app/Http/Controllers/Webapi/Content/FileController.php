<?php

namespace App\Http\Controllers\Webapi\Content;

use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Content\File;

class FileController extends Controller
{
    public function show(File $file)
    {
        $this->authorize('download', $file);
        
        $path = config('urls.files.materials_files') . $file->material->id . '/' . $file->name;

        if (!Storage::disk('local')->exists($path)) {
            abort(404);
        }
    
        return response()->download(
            storage_path('app/' . $path), 
            $file->name, 
            [
                "Content-Type" => Storage::disk('local')->mimeType($path)
            ]
        );
    }
}