<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Nombre de la tabla (opcional si el nombre sigue la convención)
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps =true;

    // Indica qué columnas se pueden llenar con create() o update()
    protected $fillable = [
        'name',
        'price',
        'description'
    ];
}
