<?php

namespace Database\Seeders;

use App\Models\Document;
use App\Models\DocumentType;
use App\Models\User;
use Database\Factories\DocumentFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        //Document::factory(10)->create();
        //DocumentType::factory(10)->create();

        DocumentType::factory(2)->hasDocuments(5)->create();

//        DocumentType::factory()->count(1)
//            ->for(Document::factory(1), 'documents')
//            ->create();

//        DocumentType::factory()
//            ->has(Document::factory()->count(2), 'documents')
//            ->create();

//        DocumentType::factory(10)
//            ->create()
//            ->each(function ($documentType) {
//
//            })
//        Document::factory(10)
//            ->create()
//            ->each(function ($document) {
//                $document->type()->save(DocumentType::factory(1)->make());
//            });

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
