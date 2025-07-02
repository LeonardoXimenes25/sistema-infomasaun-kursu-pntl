<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=> Hash::make('admin'),
                'email_verified_at'=>now(),
            ],

            );

        User::create(
            [
                'name'=>'Marcel',
                'email'=>'marcel@gmail.com',
                'password'=> Hash::make('1234'),
                'email_verified_at'=>now(),
            ],

            );

            
    }
}
