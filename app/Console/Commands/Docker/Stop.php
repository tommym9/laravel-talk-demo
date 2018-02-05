<?php
namespace App\Console\Commands\Docker;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class Stop extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:stop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Stops the docker local environment';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Stopping the local docker environment...');

        $process = new Process('cd laradock && docker-compose stop');
        $process->run(function ($type, $buffer) {
            echo $buffer;
        });

        $this->info('Local docker environment stopped.');
    }
}
