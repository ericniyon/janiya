<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreAttribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'store_id',
        'product_size_id',
        'color_id',
        'quantity',
        'new_quantity',
        'pre_order',
        'order_confirmed',
        'pre_order_confirmed',
        'product_attribute_id',
        'size',
        'color'
    ];

    public function attributes()
    {
        return $this->belongsTo(ProductAttribute::class);
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class,'product_size_id','id');
    }
}
