<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'barang_id', 'pembeli_id', 'jumlah', 'tanggal'];

    public $timestamps = true;

    //relasi barangs2 dan pembeli
    public function barang()
    {
        return $this->belongsTo(Barangs2::class, 'barang_id');
    }
    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'pembeli_id');
    }

}
