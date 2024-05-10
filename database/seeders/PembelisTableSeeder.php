<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelis = [
            ['nama_pembeli' => 'Kiryu', 'jenis_kelamin' => 'Laki-Laki'],
            ['nama_pembeli' => 'David', 'jenis_kelamin' => 'Laki-Laki'],
            ['nama_pembeli' => 'Haruka', 'jenis_kelamin' => 'Perempuan'],
        ];

        // masukkan pembeli ke database
        DB::table('pembelis')->insert($pembelis);
    }
}
