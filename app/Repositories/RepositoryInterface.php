<?php

namespace App\Repositories;

interface RepositoryInterface
{
    public function get();
    public function first();
    public function paginate($by);
    public function findById($id);
    public function latest();
    public function limit($by);
}