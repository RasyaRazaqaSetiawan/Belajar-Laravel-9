<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangs2 extends Model
{
    use HasFactory;
    // protected $fillable = ['id', 'nama_barang', 'harga', 'stok'];
    protected $table = 'barangs2';

    public $timestamps = true;

    // relasi ke transaksi
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_barang');
    }
}
