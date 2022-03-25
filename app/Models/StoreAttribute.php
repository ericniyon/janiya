<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreAttribute extends Model
{
    use HasFactory;

    protected $fillable = ['store_id', 'product_attribute_id', 'quantity', 'size', 'color'];

    public function product()
    {
        return $this->belongsTo(ProductAttribute::class,'product_attribute_id','id');
    }

    public function store()
    {
        return $this->belongsTo(Store::class,'store_id','id');
    }

    public function rel_products()
    {
        return $this->belongsTo(Store::class,'store_id','id');
    }
}
