<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
class TransaksisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksis=[
            ['barang_id'=> 1, 'pembeli_id'=> 1, 'jumlah'=>10000000, 'tanggal' =>'2024-01-29'],
            ['barang_id'=> 2, 'pembeli_id'=> 3, 'jumlah'=>5000000, 'tanggal' =>'2024-11-09'],
            ['barang_id'=> 3, 'pembeli_id'=> 2, 'jumlah'=>14000000, 'tanggal' =>'2024-12-08'],
            ['barang_id'=> 3, 'pembeli_id'=> 1, 'jumlah'=>7000000, 'tanggal' =>'2024-10-09'],
            ['barang_id'=> 2, 'pembeli_id'=> 3, 'jumlah'=>8000000, 'tanggal' =>'2024-06-11'],
            ['barang_id'=> 1, 'pembeli_id'=> 2, 'jumlah'=>55000000, 'tanggal' =>'2024-07-19'],
        ];

        //masukka data transaksi ke Database
        DB::table('transaksis')->insert($transaksis);
    }
}
