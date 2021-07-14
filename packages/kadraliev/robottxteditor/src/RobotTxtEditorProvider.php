<?php

namespace Kadraliev\RobotTxtEditor;

use Illuminate\Support\ServiceProvider;

class RobotTxtEditorProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'edit-form');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views/kadraliev/robottxteditor/views')
        ]);
    }
}
