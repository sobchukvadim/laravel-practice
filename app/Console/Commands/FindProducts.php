<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class FindProducts extends Command
{
    /**
     * Find products by many conditions.
     *
     * @var string
     */
    protected $signature = 'products:find';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Find products by conditions';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $baseQuery = Product::query()
            ->where('manufactured_in', '2000');

        $productsCount = $baseQuery->count();

        $baseQuery->each(function ($product) {
           //$this->line($product->name);
        });

        $this->info(sprintf("Products count: %s", $productsCount));
    }
}
