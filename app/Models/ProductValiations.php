<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductValiations extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity', 'price', 'product_color', 'product_name', 'product_size',
    ];
}
