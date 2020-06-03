<?php

namespace ScheduleLoop\Tests;

use Orchestra\Testbench\TestCase;
use ScheduleLoop\ScheduleLoopServiceProvider;

class ScheduleLoopCommandTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ScheduleLoopServiceProvider::class];
    }

    public function test_command_exists()
    {
        $this->assertEquals(0, \Artisan::call('schedule:loop 1'));
    }
}
