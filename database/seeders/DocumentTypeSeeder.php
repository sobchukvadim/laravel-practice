<?php

namespace Database\Seeders;

use Database\Factories\DocumentTypeFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentTypeFactory::times(10)->create();
    }
}
