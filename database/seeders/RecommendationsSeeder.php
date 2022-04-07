<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class RecommendationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recs_array = [
            'Good',
            'Bad',
        ];
        
        foreach($recs_array as $rec)
        {
            DB::table('recommendations')->insert([
                'recommendation' => $rec
            ]);   
        }
    }
}
