<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;
    protected $filetable = ['id', 'name_brand'];
    // protected $table = ['penggunas']; seluruh table pengguna
    public $timestamps = true;

    public function product()
    {
        return $this->hasMany(product::class, 'id_brand');
    }
}
