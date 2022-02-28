<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_valiations_id', 'quantity'];

    // public function products()
    // {
    //     return $this->hasManyThrough(Product::class, ProductValiations::class);
    // }

    public function product()
    {
        return $this->belongsTo(ProductValiations::class, 'product_valiations_id', 'id');
    }
    
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
