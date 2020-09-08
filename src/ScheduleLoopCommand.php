<?php

namespace ScheduleLoop;

use Illuminate\Console\Command;

class ScheduleLoopCommand extends Command
{
    /**
     * The sleep argument name.
     *
     * @var string
     */
    const SLEEP_ARGUMENT = 'sleep';

    /**
     * The command argument name.
     *
     * @var string
     */
    const COMMAND_ARGUMENT = 'run';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:loop {' . self::SLEEP_ARGUMENT . '=60} {' . self::COMMAND_ARGUMENT . '=schedule:run}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run commands inside a loop';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        while (true) {
            $this->info('[' . now()->toDateTimeString() . '] ' . $this->argument(self::COMMAND_ARGUMENT));
            $this->call($this->argument(self::COMMAND_ARGUMENT));

            sleep($this->argument(self::SLEEP_ARGUMENT));

            if (!is_null(env('SCHEDULE_LOOP_TEST_MODE'))) {
                break;
            }
        }
    }
}
