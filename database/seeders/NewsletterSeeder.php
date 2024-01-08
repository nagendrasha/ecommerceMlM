<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['email'=>'test.user@gmail.com'],
            ['email'=>'test2.user@gmail.com'],
            ['email'=>'test3.user@gmail.com'],
            ['email'=>'test4.user@gmail.com'],
            ['email'=>'test5.user@gmail.com'],
           
         
        ];
        DB::table('newsletters')->insert($data);
    }
}
