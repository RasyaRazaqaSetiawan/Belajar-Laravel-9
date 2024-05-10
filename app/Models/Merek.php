<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merek extends Model
{
    use HasFactory;
    // sebutkan isi table
    protected $filetable = ['id', 'nama_merek'];
    // protected $table = ['penggunas']; seluruh table pengguna
    public $timestamps = true;

    // relasi ke tabel produk
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
