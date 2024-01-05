<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use DB;

class AdminDefaultCredentialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        DB::table('users')->truncate();
        $data = array([
            'role' => 1,
            'name' => 'Super Admin',
            'email' => 'super.admin@gmail.com',
            'password' => password_hash('super@admin@password',PASSWORD_DEFAULT)
        ],[
            'role' => 1,
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => password_hash('admin@12345',PASSWORD_DEFAULT)
        ]);
        User::insert($data);
    }
}
