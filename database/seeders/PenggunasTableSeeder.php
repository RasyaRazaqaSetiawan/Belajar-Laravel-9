<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $penggunas = [
            ['nama' => 'Rasya'],
            ['nama' => 'Andhika' ],
            ['nama' => 'Kiryu']
        ];

        // masukkan data ke database
        DB::table('penggunas')->insert($penggunas);
    }
}
