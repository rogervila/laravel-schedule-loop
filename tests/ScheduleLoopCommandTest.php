<?php

namespace ScheduleLoop\Tests;

use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase;
use ScheduleLoop\ScheduleLoopServiceProvider;
use Symfony\Component\Console\Exception\CommandNotFoundException;

class ScheduleLoopCommandTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ScheduleLoopServiceProvider::class];
    }

    public function test_command_exists()
    {
        $this->assertEquals(0, Artisan::call('schedule:loop 0'));
        $this->assertEquals(0, Artisan::call('schedule:loop 0 list'));
    }

    public function test_fails_if_custom_command_not_exists()
    {
        $this->expectException(CommandNotFoundException::class);

        Artisan::call('schedule:loop 1 foo');
    }
}
