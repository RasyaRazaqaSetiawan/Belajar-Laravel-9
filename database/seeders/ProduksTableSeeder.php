<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            ['nama_produk' => 'CIVIC', 'jumlah' => '100', 'tanggal_produksi' => '15 Februari 2024', 'id_merek' => '1'],
            ['nama_produk' => 'GTR', 'jumlah' => '150', 'tanggal_produksi' => '24 Maret 2024', 'id_merek' => '2'],
            ['nama_produk' => 'ALPHARD', 'jumlah' => '50', 'tanggal_produksi' => '30 Mei 2024', 'id_merek' => '1'],
            ['nama_produk' => 'Portofino', 'jumlah' => '90', 'tanggal_produksi' => '29 Januari 2024', 'id_merek' => '3'],
            ['nama_produk' => '250 GTO ', 'jumlah' => '88', 'tanggal_produksi' => '15 April 2024', 'id_merek' => '3'],
            ['nama_produk' => ' Terra ', 'jumlah' => '50', 'tanggal_produksi' => '05 Juni 2024', 'id_merek' => '2'],
        ];
        // masukkan data ke database
        DB::table('produks')->insert($produks);
    }
}
