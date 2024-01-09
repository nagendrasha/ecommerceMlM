<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'image'=>'default/about.jpg',
            'name'=>'ecommerce blog1',
            'short_description'=>'Electronic typesetting text of the printing and typesetting industry. when an unknown printer took a galley of type
             and scrambled it to make a type specimen book',
            'description'=> 'Electronic typesetting text of the printing and typesetting industry. when an unknown printer took a galley of type
             and scrambled it to make a type specimen book. Lorem Ipsum is
             simply dutmmy text ever since the 1500s, It has survived not only,
             but also the leap into electronic typesetting.'
            ],
        ];
        DB::table('abouts')->insert($data);
    }
}
