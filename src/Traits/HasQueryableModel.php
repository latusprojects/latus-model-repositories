<?php

namespace Latus\Repositories\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

trait HasQueryableModel
{
    /**
     * Gets an instance of the related model
     *
     * @return Model
     */
    public abstract function relatedModel(): Model;

    public function query(): Builder
    {

    }
}