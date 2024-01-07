<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TaglineSeederClass extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'We have Lots of offers Product','color'=>'#f91a1a','sort'=>1],
            ['title'=>'Use "TEST50%" Coupon on first shopping','color'=>'#378439','sort'=>2],
            ['title'=>'Testing tagline Three','color'=>'#4f67c4','sort'=>3],
            ['title'=>'Testing tagline Four','color'=>'#e8db53','sort'=>4]
        ];
        DB::table('taglines')->insert($data);
    }
}
