<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\Models\Post::class, 30)->create();
        //\App\Models\Post::factory()->count(30)->create();
        Post::factory()->count(20)->create();
    }
}
