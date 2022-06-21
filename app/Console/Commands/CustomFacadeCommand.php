<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Facades\Parser;

class CustomFacadeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'custom-facade:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $result = [
            Parser::getLinks(),
        ];

        dd($result);
    }
}
