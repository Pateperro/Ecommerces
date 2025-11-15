<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'price',
        'description',
        'category_id',
        'brand',
    ];

    // Relación con categoría
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Relación con marca
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand');
    }

    // Relación con imágenes
    public function images()
    {
        return $this->hasMany(ImgProduct::class, 'product_id');
    }
}
