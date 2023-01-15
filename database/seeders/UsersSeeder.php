<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users') -> insert([
            'name'=> 'Admin',
            'email'=>'admin@gmail.com',
            'is_admin'=> 1,
            'password'=> Hash::make('password')
        ]);
        DB::table('users') -> insert([
            'name'=> 'User',
            'email'=>'user@gmail.com',
            'is_admin'=> 0,
            'password'=> Hash::make('password')
        ]);
        DB::table('users') -> insert([
            'name'=> 'Admin',
            'email'=>'ashish@gmail.com',
            'is_admin'=> 0,
            'password'=> Hash::make('password')
        ]);
    }
}
