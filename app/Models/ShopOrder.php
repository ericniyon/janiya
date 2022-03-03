<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderNo',
        'store_id',
        'total_amount',
        'payment_confirmed',
        'status'
    ];

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
    
    public static function boot()
    {
        parent::boot();
        static::creating(function($model){
            $lastCol = ShopOrder::max('id');
            $model->orderNo = 'Order' . str_pad($lastCol+1,6,'0',STR_PAD_LEFT);
        });
    }
}
