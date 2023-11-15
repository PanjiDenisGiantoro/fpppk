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
//        $admin = User::create([
//            'name' => 'Admin',
//            'email' => 'admin@gmail.com',
//            'password' => bcrypt('12345678'),
//        ]);
//
//        $admin->assignRole('admin');
//
//        $user = User::create([
//            'name' => 'User',
//            'email' => 'user@gmail.com',
//            'password' => bcrypt('12345678'),
//        ]);
//
//        $user->assignRole('user');


        $admin1 = User::create([
            'name' => 'FPPPK Kab Bogor',
            'email' => 'fpppk.org@gmail.com',
            'password' => bcrypt('fpppk.org@gmail.com'),
        ]);
        $admin1->assignRole('admin');

    }
}
