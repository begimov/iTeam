<?php

namespace App\Repositories\Eloquent\Criteria;

use App\Repositories\Criteria\CriterionInterface;

class WhereIn implements CriterionInterface
{
    protected $column;
    protected $value;

    public function __construct($column, $value)
    {
        $this->column = $column;
        $this->value = $value;
    }

    public function apply($entity)
    {
        return $entity->whereIn($this->column, $this->value);
    }
}