<?php

namespace App\Models;

use App\Models\Vendor;
use App\Observers\ProductObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'slug',
        'price',
        'discounted_price',
        'product_category_id',
        'description',
        'product_image',
        'vendor_id',
    ];

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    /**
     * Get the shop that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shop(): BelongsTo
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function booted(){
        self::observe(ProductObserver::class);
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
    public function colors()
    {
        return $this->hasManyThrough(Color::class, ProductAttribute::class);
    }
    // public function size()
    // {
    //     return $this->hasManyThrough(productSize::class, ProductAttribute::class);
    // }

    public function shops()
    {
        return $this->hasMany(Store::class);
    }


        /**
         * Get all of the comments for the Product
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function rel_products()
        {
            return $this->hasMany(Product::class, 'product_category_id', 'product_category_id')->limit(12);
        }
}
