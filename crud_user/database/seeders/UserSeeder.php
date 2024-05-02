<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('123456'),
            'photo' => 'test',
            'favorities' => 'Thích xem gái',
            'mssv' => 'test1'
        ]);

        DB::table('users')->insert([
            'name' => 'admin2',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('123456'),
            'photo' => 'test',
            'favorities' => 'Thích ăn cơm',
            'mssv' => 'test2'
        ]);

        DB::table('users')->insert([
            'name' => 'admin3',
            'email' => 'admin3@gmail.com',
            'password' => Hash::make('123456'),
            'photo' => 'test',
            'favorities' => 'Thích làm heo',
            'mssv' => 'test3'
        ]);
    }
}
