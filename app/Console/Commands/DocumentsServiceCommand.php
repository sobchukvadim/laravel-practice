<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DocumentsServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'documents:test';

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
        //dd(app('documents')->get());
        $user = User::
    }
}
