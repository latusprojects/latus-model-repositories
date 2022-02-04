<?php

namespace Latus\Repositories;

use Illuminate\Database\Concerns\BuildsQueries;
use Illuminate\Database\Eloquent\Model;

abstract class ServicedModel
{
    use BuildsQueries;

    public function __construct()
    {
        $this->createMacros();
    }

    public function find($id)
    {
        return $this->baseModel()->newQuery()->where()->getQuery()->getProcessor()
    }

    /**
     * Gets an instance of the related model
     *
     * @return Model
     */
    public abstract function baseModel(): Model;

    protected function createMacros()
    {
        foreach ($this->forwardedMethods as $method) {
            if (method_exists($this->baseModel()))
        }
    }

    protected array $forwardedMethods = [];
}