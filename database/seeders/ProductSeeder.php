<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=ProductSeeder
     *
     * @return void
     */
    public function run()
    {
        $timeStart = microtime(true);

        $step = 1;
        $count = 10;

        $allProductsCount = Product::query()->count();

        while ($step <= 10000) {
            Product::factory()->count($count)
                ->create();

            $allProductsCount += $count;

            echo sprintf("Step %s +%s - %s%s", $step, $count, $allProductsCount, PHP_EOL);

            $step++;
        }

        $timeEnd = microtime(true);
        $time = ($timeEnd - $timeStart) / 60;

        echo "Process time: {$time}" . PHP_EOL;
    }
}
