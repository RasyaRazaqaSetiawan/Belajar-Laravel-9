<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name_product', 'price', 'description', 'id_brand', 'cover'];

    public $timestamps = true;

    //relasi barangs2 dan pembeli
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'id_brand');
    }

    // menghapus cover
    public function deleteImage()
    {
        if($this->cover && file_exists(public_path('images/product' . $this->cover))){
            return unlink(public_path('images/product' . $this->cover));
        }
    }
}

