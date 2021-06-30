<?php

namespace Latus\Repositories;

use Illuminate\Support\ServiceProvider;
use Latus\Repositories\Contracts\Repository;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Repository::class, EloquentRepository::class);
    }
}
