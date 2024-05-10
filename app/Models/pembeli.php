<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    //isi table
    protected $fillable = ['id', 'nama_pembeli', 'jenis_kelamin'];

    public $timestamps = true;

    // relasi ke transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_pembeli');
    }
}
