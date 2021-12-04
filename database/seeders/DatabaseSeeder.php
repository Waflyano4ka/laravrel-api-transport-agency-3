<?php

namespace Database\Seeders;

use App\Http\Resources\PostUserResource;
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
        $this->call([
            PostSeeder::class,
            UserSeeder::class,
            PostUserSeeder::class,
            CitySeeder::class,
            ModelSeeder::class,
        ]);
    }
}
