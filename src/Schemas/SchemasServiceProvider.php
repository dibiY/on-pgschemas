<?php

namespace Onpgschemas;

use Illuminate\Support\ServiceProvider;

/**
 * Class SchemasServiceProvider
 *
 * @package Onpgschemas
 */
class SchemasServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Schemas', function () {
            return new Schemas;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }
}
