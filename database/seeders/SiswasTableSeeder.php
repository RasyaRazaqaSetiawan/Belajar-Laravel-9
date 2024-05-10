<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswas = [
            ['nama' => 'Rasya', 'jenis_kelamin' => 'Laki Laki', 'alamat' => 'Rancamanyar', 'agama' => 'Islam', 'telepon' => '082183940143', 'email' => 'Rasya@gmail.com'],
            ['nama' => 'John', 'jenis_kelamin' => 'Laki Laki', 'alamat' => 'Armadillo', 'agama' => 'Kristen', 'telepon' => '0821940291851', 'email' => 'John@gmail.com'],
            ['nama' => 'Otacon', 'jenis_kelamin' => 'Laki Laki', 'alamat' => 'Shadow Moses', 'agama' => 'Kristen', 'telepon' => '082145768910', 'email' => 'Otacon@gmail.com'],
            ['nama' => 'David', 'jenis_kelamin' => 'Laki Laki', 'alamat' => 'Bandung', 'agama' => 'Islam', 'telepon' => '081924356871', 'email' => 'David@gmail.com'],
            ['nama' => 'Alex', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Japan', 'agama' => 'Buddha', 'telepon' => '0821945817412', 'email' => 'Alex@gmail.com'],
            ['nama' => 'Kaley', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Korea', 'agama' => 'Khonghucu', 'telepon' => '081924357812', 'email' => 'Kaley@gmail.com'],
            ['nama' => 'Komang', 'jenis_kelamin' => 'Laki Laki', 'alamat' => 'Surabaya', 'agama' => 'Kristen', 'telepon' => '089346174652', 'email' => 'Komang@gmail.com'],
            ['nama' => 'Lisa', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'England', 'agama' => 'Atheis', 'telepon' => '089756423142', 'email' => 'Lisa@gmail.com'],
            ['nama' => 'Asti', 'jenis_kelamin' => 'Perempuan', 'alamat' => 'Aceh', 'agama' => 'Islam', 'telepon' => '089456789012', 'email' => 'Asti@gmail.com'],
            ['nama' => 'Asep', 'jenis_kelamin' => 'Laki Laki', 'alamat' => 'Jogja', 'agama' => 'Islam', 'telepon' => '084617893240', 'email' => 'Asep@gmail.com']
        ];

        // masukkan data ke database
        DB::table('siswas')->insert($siswas);
    }
}
