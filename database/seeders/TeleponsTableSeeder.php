<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeleponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $telepons = [
            ['nomor_telepon' => '082194582742', 'pengguna_id'=>1],
            [ 'nomor_telepon' => '081924568712', 'pengguna_id'=>2],
            ['nomor_telepon' => '082931561282', 'pengguna_id'=>3]
        ];

        // masukkan data ke database
        DB::table('telepons')->insert($telepons);
    }
}
