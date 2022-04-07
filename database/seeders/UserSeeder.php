<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
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
            'name' => 'admin1',
            'email' => 'admin1@test.com',
            'password' => bcrypt('admin1'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'lar1',
            'email' => 'lar1@test.com',
            'password' => bcrypt('laravel1'),
        ]);

        DB::table('users')->insert([
            'name' => 'lar2',
            'email' => 'lar2@test.com',
            'password' => bcrypt('laravel2'),
        ]);
    }
}
