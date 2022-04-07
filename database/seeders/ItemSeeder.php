<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_name' => 'Test',
            'description' => 'Im just a test, pls dont hurt',
            'tag' => 'games',
            'loan_time' => 5,
            'is_loaned' => false,
            'id_lender' => 1,
        ]);

        DB::table('items')->insert([
            'item_name' => 'Dummy',
            'description' => 'This is just a dummy',
            'tag' => 'tools',
            'loan_time' => 4,
            'is_loaned' => false,
            'id_lender' => 2,
        ]);

        DB::table('items')->insert([
            'item_name' => 'Nokia 3310',
            'description' => 'The 3310 is known for being reasonably durable due to its casing and construction, a feature which is often humorously exaggerated in online communities. Numerous videos also exist of the phone being put through increasingly-severe damage tests to test the phones strength',
            'tag' => 'electronics',
            'loan_time' => 21,
            'is_loaned' => false,
            'id_lender' => 1,
        ]);
    }
}
