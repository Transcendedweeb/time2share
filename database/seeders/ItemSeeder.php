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
            'item_name' => 'Nokia 3310',
            'description' => 'The 3310 is known for being reasonably durable due to its casing and construction, a feature which is often humorously exaggerated in online communities. Numerous videos also exist of the phone being put through increasingly-severe damage tests to test the phones strength',
            'tag' => 'electronics',
            'image' => '/img/electronics.png',
            'loan_time' => 21,
            'is_loaned' => false,
            'id_lender' => 1,
        ]);

        DB::table('items')->insert([
            'item_name' => 'Minecraft',
            'description' => 'In Minecraft for Nintendo Switch, the adventure begins with your imagination. You can break blocks, place them and do whatever you want with them. Try to dig as deep a hole as possible or make a shelter to hide in at night from the terrible monsters.',
            'tag' => 'games',
            'image' => '/img/games.png',
            'loan_time' => 12,
            'is_loaned' => false,
            'id_lender' => 3,
        ]);

        DB::table('items')->insert([
            'item_name' => 'Harry Potter',
            'description' => 'This is the Harry Potter - Complete 8-Film Collection, the complete box set containing all eight parts from the legendary film series. Experience J.K. Rowlings Wizarding World is now home again with these eight classics in one complete Happy Potter DVD box.',
            'tag' => 'films',
            'image' => '/img/films.png',
            'loan_time' => 5,
            'is_loaned' => false,
            'id_lender' => 1,
        ]);

        DB::table('items')->insert([
            'item_name' => 'Used Toothbrush',
            'description' => 'Very delicate used toothbrush.',
            'tag' => 'electronics',
            'image' => '/img/electronics.png',
            'loan_time' => 1,
            'is_loaned' => false,
            'id_lender' => 2,
        ]);

        DB::table('items')->insert([
            'item_name' => 'Balaclava',
            'description' => 'Perfect to hide your face.',
            'tag' => 'other',
            'image' => '/img/other.png',
            'loan_time' => 31,
            'is_loaned' => false,
            'id_lender' => 3,
        ]);
    }
}
