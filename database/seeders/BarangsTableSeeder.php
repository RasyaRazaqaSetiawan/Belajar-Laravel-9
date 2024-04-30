<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $barangs = [
            ['nama' => 'Rasya', 'jumlah' => 15],
            ['nama' => 'Kiryu', 'jumlah' => 10],
            ['nama' => 'John', 'jumlah' => 9]
        ];
        // masukkan data ke database
        DB::table('barangs')->insert($barangs);

    }
}
