<?php

namespace App\Transformers\Products;

use App\Models\Products\Material;
use App\Transformers\Content\FileTransformer;
use App\Transformers\Content\ResourceTransformer;

class MaterialTransformer extends \League\Fractal\TransformerAbstract
{
    protected $availableIncludes = ['files', 'resources'];

    public function transform(Material $material)
    {
        return [
            'id' => $material->id,
            'name' => $material->name,
        ];
    }

    public function includeFiles(Material $material)
    {
        return $this->collection($material->files, new FileTransformer($material->id));
    }

    public function includeResources(Material $material)
    {
        return $this->collection($material->resources, new ResourceTransformer());
    }
}