<?php

namespace App\Transformers\Content;

use App\Models\Content\File;

class FileTransformer extends \League\Fractal\TransformerAbstract
{
    protected $materialId;

    public function __construct($materialId)
    {
        $this->materialId = $materialId;
    }

    public function transform(File $file)
    {
        // TODO: update path to correct symbolic link
        return [
            'id' => $file->id,
            'name' => $file->name,
            'size' => $file->size,
            'path' => asset('storage/files/materials/id_' . $this->materialId . '/' . $file->name),
        ];
    }
}