<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'example@gmail.com',
            'password' => bcrypt('admin'),
            'surname' => 'Админ',
            'first_name' => 'Админ',
            'second_name' => 'Админ',
            'passport_series' => '0000',
            'passport_number' => '000000',
            'inn' => '000000000000',
            'birthday' => '2000/01/01',

        ]);
    }
}
