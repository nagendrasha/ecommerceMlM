<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'image'=> 'default/slider.jpg'
            
        ]);
    }
}
