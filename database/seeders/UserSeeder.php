<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
 
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'admin',
            'email'=> 'admin@galva.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
