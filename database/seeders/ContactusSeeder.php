<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['first_name'=>'Vishal','last_name'=>'sharma','email_id'=>"vishalsharma@gmail.com",'phone_number'=>"987643210"],
            ['first_name'=>'Rohit','last_name'=>'sharma','email_id'=>"rohitsharma@gmail.com",'phone_number'=>"978643210"],
            ['first_name'=>'Shyam','last_name'=>'sharma','email_id'=>"shyamsharma@gmail.com",'phone_number'=>"98763210"],
            ['first_name'=>'Ram','last_name'=>'sharma','email_id'=>"ramsharma@gmail.com",'phone_number'=>"987643210"],
            ['first_name'=>'Neha','last_name'=>'sharma','email_id'=>"nehasharma@gmail.com",'phone_number'=>"987643289"],
        
        ];
        DB::table('contactuses')->insert($data);
    }
}
