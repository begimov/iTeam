<?php

namespace App\Repositories;

use App\Repositories\Exceptions\NoEntityDefined;
use App\Repositories\Criteria\CriteriaInterface;

abstract class EloquentRepositoryAbstract implements RepositoryInterface, CriteriaInterface
{
    protected $entity;

    public function __construct()
    {
        $this->entity = $this->resolveEntity();
    }
    
    public function withCriteria(array $criteria)
    {
        foreach ($criteria as $criterion) {
            $this->entity = $criterion->apply($this->entity);
        }
        return $this;
    }

    protected function resolveEntity()
    {
        if (!method_exists($this, 'entity')) {
            throw new NoEntityDefined();
        }
        return app()->make($this->entity());
    }

}