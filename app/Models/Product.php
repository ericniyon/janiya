<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'description', 'product_category_id','product_image'
    ];

    public function product_categories()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get all of the attributes for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attributes()
    {
        return $this->hasMany(ProductValiations::class,'product_name');
    }
}
