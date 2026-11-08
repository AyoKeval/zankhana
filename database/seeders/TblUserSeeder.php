<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TblUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tbl_users')->insert([
            [
                'name' => 'Super Admin',
                'email' => 'super.admin@booknest.com',
                'password' => Hash::make('sadmin@!4147'),
                'role' => 'sadmin'
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@booknest.com',
                'password' => Hash::make('admin@!123'),
                'role' => 'admin',
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@booknest.com',
                'password' => Hash::make('manager@!123'),
                'role' => 'manager',
            ],
            [
                'name' => 'John Doe',
                'email' => 'john.doe@booknest.com',
                'password' => Hash::make('john@!123'),
                'role' => 'user',
            ],
        ]);
    }
}