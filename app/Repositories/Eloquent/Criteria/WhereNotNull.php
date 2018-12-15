<?php

namespace App\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class WhereNotNull implements CriterionInterface
{
    protected $field;

    public function __construct($field)
    {
        $this->field = $field;
    }

    public function apply($entity)
    {
        return $entity->whereNotNull($this->field);
    }
}