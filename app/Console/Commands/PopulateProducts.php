<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class PopulateProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'products:populate {count=1} {steps=60}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto-Populating products table. For testing indexes';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $count = $this->argument('count');
        $steps = $this->argument('steps');
        $step = 1;

        Log::info('Start population process...');

        while ($step <= $steps) {
            Product::factory()->count($count)
                ->create();

            $step++;
        }

        $insertedCount = $steps * $count;

        Log::info("Created {$insertedCount} new products.");
    }
}
