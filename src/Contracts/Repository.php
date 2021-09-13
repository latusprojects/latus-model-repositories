<?php


namespace Latus\Repositories\Contracts;


use Illuminate\Database\Eloquent\Model;

interface Repository
{

    /**
     * Gets an instance of the related model
     *
     * @return Model
     */
    public function relatedModel(): Model;

    /**
     * Attempts to create a new model
     *
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * Attempts to find a model by its id
     *
     * @param int|string $id
     * @return Model|null
     */
    public function find(int|string $id): Model|null;

}