<?php

namespace Zyxus\LaravelSluggable;

use Illuminate\Support\ServiceProvider;

class SluggableServiceProvider extends ServiceProvider
{


    public function register()
    {
        //
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            // Export the migration
            if (! class_exists('CreateSlugsTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_slugs_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_slugs_table.php'),
                    // you can add any number of migrations here
                ], 'migrations');
            }
        }
    }
}
