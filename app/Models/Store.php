<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = ['vendor_id', 'product_id'];

    // public function products()
    // {
    //     return $this->hasManyThrough(Product::class, ProductValiations::class);
    // }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    
    public function owner()
    {
        return $this->belongsTo(Vendor::class, 'vendor_id', 'id');
    }

    /**
     * The valiations that belong to the Store
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function valiations()
    {
        return $this->belongsToMany(ProductValiations::class, 'product_valiation_store', 'store_id', 'product_valiations_id')->withPivot('quantity');
    }
}
