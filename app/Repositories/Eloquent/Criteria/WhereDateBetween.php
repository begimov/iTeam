<?php

namespace App\Repositories\Eloquent\Criteria;

use Illuminate\Support\Carbon;
use App\Repositories\Criteria\CriterionInterface;

class WhereDateBetween implements CriterionInterface
{
    protected $field;

    protected $begin;

    protected $end;

    public function __construct($field, Carbon $begin, Carbon $end)
    {
        $this->field = $field;

        $this->begin = $begin;

        $this->end = $end;
    }

    public function apply($entity)
    {
        return $entity->whereBetween($this->field, [$this->begin, $this->end]);
    }
}