<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AwsomeServiceprovider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Service\AwsomeServiceInterface','App\Service\AwsomeService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
