<?php

namespace App\Http\Traits;

use Storage;

trait Downloadable
{
    protected function downloadMaterialFile()
    {
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
