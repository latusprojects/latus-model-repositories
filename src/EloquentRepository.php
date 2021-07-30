<?php


namespace Latus\Repositories;


use Illuminate\Database\Eloquent\Model;
use Latus\Repositories\Contracts\Repository;

abstract class EloquentRepository implements Repository
{

    public function create(array $attributes): Model
    {
        return $this->relatedModel()->create($attributes);
    }

    public function find(int|string $id): Model|null
    {
        return $this->relatedModel()->find($id);
    }
}