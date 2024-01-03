<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class AdminDefaultCredentialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => password_hash('admin@12345',PASSWORD_DEFAULT)
        ]);
    }
}
