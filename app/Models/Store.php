<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = ['name','slug','vendor_id','product_id'];

    public function shop()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function valiations()
    {
        return $this->hasMany(StoreAttribute::class);
    }

    /**
     * Get all of the colors for the Store
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function colors()
    {
        return $this->valiations()->color();
    }

    public function orders()
    {
        return $this->hasMany(ShopOrder::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
