<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([

        'role' =>'admin',
        'name' =>'Carlos Torres',
        'email' =>'torres080392@gmail.com',
        'password'=>'199203'

        ]);
    }
}
