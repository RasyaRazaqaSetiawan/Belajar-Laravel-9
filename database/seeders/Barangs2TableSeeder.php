<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class Barangs2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs2 = [
            ['nama_barang' => 'Sepeda', 'harga' => 5000000, 'stok' => 10],
            ['nama_barang' => 'PlayStation', 'harga' => 300000, 'stok' => 5],
            ['nama_barang' => 'Motor', 'harga' => 100000000, 'stok' => 15],
        ];
        // masuk data ke database
        DB::table('barangs2')->insert($barangs2);

    }
}
