<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

class OffAllLights extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'off:lights';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'It turns off all lights.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client = new Client(new Version2X('https://mkelights.com:8080/'));

        $client->initialize();

        $client->emit('all_light_off', ['message' => 'all light off']);

        $client->close();
    }
}
