<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //echo "Seeding data";
       // \App\Models\Category::factory(10)->create();


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Category::create([
             'title' => 'Child',
             'description' => 'Child Fashion'
         ]);

        \App\Models\Category::create([
             'title' => 'Man',
             'description' => 'Man Fashion'
         ]);

         \App\Models\Category::create([
            'title' => 'Child',
            'description' => 'Child Fashion'
        ]);

       

        \App\Models\product::factory()->create([
                'title' => 'Test product',
                'description' => 'product@example.com',
                'is_active' =>1,
            ]);

    }
}
