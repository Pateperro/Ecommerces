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
}
