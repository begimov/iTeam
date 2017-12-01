<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function get();
    public function paginate($by);
    public function findById($id);
}