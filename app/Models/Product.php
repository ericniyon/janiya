<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'slug', 'price', 'description', 'product_category_id','product_image'
    ];

    public function product_categories()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function thumb()
    {
        return $this->hasOne(ProductImage::class)->oldestOfMany();
    }

    /**
     * Get the lastThumb associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lastThumb()
    {
        return $this->hasOne(ProductImage::class)->latestOfMany();
    }

    public function attributes()
    {
        return $this->hasMany(ProductAttribute::class);
    }

    /**
     * Get all of the color for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function color()
    {
        return $this->hasManyThrough(Color::class, ProductAttribute::class);
    }
    public function size()
    {
        return $this->hasManyThrough(productSize::class, ProductAttribute::class);
    }

    public function shops()
    {
        return $this->hasMany(Store::class);
    }
}
