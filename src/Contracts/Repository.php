<?php


namespace Latus\Repositories\Contracts;


use Illuminate\Database\Eloquent\Model;

interface Repository
{
    public function create(array $attributes): Model;

    public function find(int|string $id): Model|null;

}