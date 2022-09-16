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
        $step = 1;
        $count = 10;

        while ($step <= 10000) {
            Product::factory()->count($count)
                ->create();

            $allCount = Product::query()->count();

            echo sprintf("Step %s +%s - %s%s", $step, $count, $allCount, PHP_EOL);

            $step++;
        }
    }
}
