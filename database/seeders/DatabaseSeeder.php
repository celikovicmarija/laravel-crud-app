<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\ContactSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {/*
        $this->call([
            PostSeeder::class //here you need the seeder class, not the model class
         ]);*/

         $ps = new ContactSeeder();
         $ps->run();
         $ps = new PostSeeder();
         $ps->run();

    }
}
