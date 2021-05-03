<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Post::factory(20)->create();
        DB::table('categories')->insert([
            [
                'id'   => 1,
                'name' => 'news',
                'slug' => 'news'
            ],
            [
                'id'   => 2,
                'name' => 'life',
                'slug' => 'life'
            ],
            [
                'id'   => 3,
                'name' => 'finance',
                'slug' => 'finance'
            ]
        ]);
    }
}
