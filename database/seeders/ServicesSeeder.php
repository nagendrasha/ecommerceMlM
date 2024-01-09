<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title'=>'24X7','name'=>'suport','icon'=>"fa-solid fa-headset"],
            ['title'=>'All over india','name'=>'Delivery','icon'=>"fa-solid"],
            
        ];
        DB::table('services')->insert($data);
    }
}
