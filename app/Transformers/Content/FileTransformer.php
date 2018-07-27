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
        return [
            'id' => $file->id,
            'name' => $file->name,
            'size' => $file->size,
            'original_name' => $file->original_name,
        ];
    }
}