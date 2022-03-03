<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','color_id','product_size_id','quantity','image'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class,'color_id','id');
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class,'product_size_id','id');
    }
}
