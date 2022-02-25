<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreValiation extends Model
{
    use HasFactory;
    protected $fillable = ['store_id','color_id','product_size_id','quantity','status'];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class,'product_size_id','id');
    }
}
