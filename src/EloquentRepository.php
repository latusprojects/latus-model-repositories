<?php


namespace Latus\Repositories;


use Illuminate\Database\Eloquent\Model;
use Latus\Repositories\Contracts\Repository;

class EloquentRepository implements Repository
{

    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function find(int|string $id): Model|null
    {
        return $this->model->find($id);
    }
}