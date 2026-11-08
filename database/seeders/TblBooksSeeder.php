<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TblBooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_books')->insert([
            [
                'is_active' => 1,
                'title' => 'Saurashtra Ni Rasdhar Part 1',
                'author' => 'Jhaverchand Meghani',
                'category' => 'volume',
                'pdf_file' => 'e8da5c90fb23da6e62e174245c1bfc25.pdf',
                'sell_count' => 152,
                'is_del' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'ip_address' => '103.247.54.97',
            ],
            [
                'is_active' => 1,
                'title' => 'Saurashtra Ni Rasdhar Part 2',
                'author' => 'Jhaverchand Meghani',
                'category' => 'volume',
                'pdf_file' => 'ff190ae847bd28fc523abb46da8e2e21.pdf',
                'sell_count' => 179,
                'is_del' => 0,
                'created_at' => now(),
                'updated_at' => now(),
                'ip_address' => '103.247.54.97',
            ],
        ]);
    }
}
