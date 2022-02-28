<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'product_category_id','product_image'
    ];

    public function product_categories()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
    
}
