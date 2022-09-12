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
        Product::factory()->count(1000000)
            ->create();
    }
}
