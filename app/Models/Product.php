<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
   // protected $fillable = ["name", "file_path", "category_id", "description", "price", "impuesto", "descuento", "stock"];

    public function products() {
        return $this->belongsTo(Category::class);
        return $this->belongsToMany(Cart::class);
        return $this->hasOne(Image::class);
        return $this->belongsTo(Ship::class);
    }
}
