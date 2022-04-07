<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags_array = [
            'games',
            'tools',
            'electronics',
            'books',
            'films',
            'other'
        ];
        
        foreach($tags_array as $tag)
        {
            DB::table('tags')->insert([
                'tag' => $tag
            ]);   
        }
    }
}
