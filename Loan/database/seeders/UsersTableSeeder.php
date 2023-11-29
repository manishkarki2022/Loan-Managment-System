<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Seed an Admin User
        User::create([
            'name'=>'Admin User',
            'email'=>'admin@gmail.com',
            'role'=>'admin',
            'status'=>'active',
            'password' =>Hash::make('password'),

        ]);

          //Seed an regular User
          User::create([
            'name'=>'Regular User',
            'email'=>'regular@gmail.com',
            'role'=>'user',
            'status'=>'active',
            'password' =>Hash::make('password'),

        ]);
    }
}
