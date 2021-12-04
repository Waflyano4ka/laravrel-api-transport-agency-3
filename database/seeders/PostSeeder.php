<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(['post_name' => 'admin',]);
        DB::table('posts')->insert(['post_name' => 'mechanic',]);
        DB::table('posts')->insert(['post_name' => 'cashier',]);
        DB::table('posts')->insert(['post_name' => 'logist',]);
        DB::table('posts')->insert(['post_name' => 'hr',]);
        DB::table('posts')->insert(['post_name' => 'head_of_office',]);
    }
}
