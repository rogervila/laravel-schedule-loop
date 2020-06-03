<?php

namespace ScheduleLoop;

use Illuminate\Support\ServiceProvider;

class ScheduleLoopServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ScheduleLoopCommand::class,
            ]);
        }
    }
}
