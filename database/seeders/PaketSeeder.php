<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paket')->insert([
            ['deskripsi' => 'Terapi 3x',
             'harga' => 990000
            ],
            ['deskripsi' => 'Terapi 5x',
             'harga' => 1600000
            ],
            ['deskripsi' => 'Terapi 10x',
             'harga' => 3100000
            ],
        ]);
    }
}
