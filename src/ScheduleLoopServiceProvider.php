<?php

namespace ScheduleLoop;

use Illuminate\Support\ServiceProvider;

class ScheduleLoopServiceProvider extends ServiceProvider
{
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
