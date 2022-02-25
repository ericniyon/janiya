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

    /**
     * Get all of the images for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    /**
     * Get the thumb associated with the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function thumb()
    {
        return $this->hasOne(ProductImage::class)->oldestOfMany();
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_product', 'product_id', 'color_id')->withPivot('quantity','image');
    }

    public function sizes()
    {
        return $this->belongsToMany(ProductSize::class, 'product_size', 'product_id', 'product_size_id')->withPivot('quantity');
    }
}
