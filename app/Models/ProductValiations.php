<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductValiations extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity', 'price', 'product_color', 'product_name', 'product_size',
    ];

    /**
     * Get the product associated with the ProductValiations
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_name', 'id');
    }

    public function color()
    {
        return $this->belongsTo(Color::class, 'product_color', 'id');
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class, 'product_size', 'id');
    }
}
