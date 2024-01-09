<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['image'=>'default/blog1.jfif','title'=>'ecommerce blog1'],
            ['image'=>'default/blog2.jfif','title'=>'ecommerce blog2'],
        ];
        DB::table('blogs')->insert($data);
    }
}
