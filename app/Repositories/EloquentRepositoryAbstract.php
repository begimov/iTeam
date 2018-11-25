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

    public function get()
    {
        return $this->entity->get();
    }

    public function first()
    {
        return $this->entity->first();
    }
    
    public function paginate($by)
    {
        return $this->entity->paginate($by);
    }

    public function findById($id)
    {
        return $this->entity->find($id);
    }

    public function latest()
    {
        $this->entity = $this->entity->latest();
        return $this;
    }

    public function oldest()
    {
        $this->entity = $this->entity->oldest();
        return $this;
    }

    public function limit($by)
    {
        $this->entity = $this->entity->limit($by);
        return $this;
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