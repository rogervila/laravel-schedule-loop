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
     * The schedule:run console command.
     *
     * @var string
     */
    const SCHEDULE_RUN_COMMAND = 'schedule:run';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'schedule:loop {' . self::SLEEP_ARGUMENT . '=60}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run schedule:run inside a loop';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        while (true) {
            $this->info(self::SCHEDULE_RUN_COMMAND);
            $this->call(self::SCHEDULE_RUN_COMMAND);

            sleep($this->argument(self::SLEEP_ARGUMENT));

            if (!is_null(env('SCHEDULE_LOOP_TEST_MODE'))) {
                break;
            }
        }
    }
}
