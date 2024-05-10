<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    // sebutkan isi table
    protected $filetable = ['id', 'nama'];
    // protected $table = ['penggunas']; seluruh table pengguna
    public $timestamps = true;

    // relasi ke tabel telepon
    public function telepon()
    {
        return $this->hasOne(Telepon::class);
    }
}
