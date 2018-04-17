<?php

namespace App\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class WhereIn implements CriterionInterface
{
    protected $column;
    protected $values;

    public function __construct($column, $values)
    {
        $this->column = $column;
        $this->values = $values;
    }

    public function apply($entity)
    {
        return $entity->whereIn($this->column, $this->values);
    }
}