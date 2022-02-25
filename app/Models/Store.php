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
    
    /**
     * Get all of the valiations for the Store
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function valiations()
    {
        return $this->hasMany(StoreValiation::class);
    }
}
