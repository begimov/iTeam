<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function paginate($by);
}