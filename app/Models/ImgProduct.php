<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImgProduct extends Model
{
    protected $table = 'img_product';

    protected $fillable = [
        'product_id',
        'url_img',
    ];

    // Relación con producto
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
