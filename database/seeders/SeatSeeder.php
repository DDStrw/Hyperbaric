<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seats')->insert([
            ['kd' => '1B'],
            ['kd' => '2A'],
            ['kd' => '2B'],
            ['kd' => '3A'],
            ['kd' => '3B'],
            ['kd' => '4A'],
            ['kd' => '4B'],
            ['kd' => '5A']
        ]);
    }
}
