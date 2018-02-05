<?php
namespace App\Console\Commands\Docker;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;

class Start extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Starts the docker local environment';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting the local docker environment...');

        $process = new Process('cd laradock && docker-compose up -d nginx mysql');
        $process->run(function ($type, $buffer) {
            echo $buffer;
        });

        $this->info('Local docker environment running.');
    }
}
