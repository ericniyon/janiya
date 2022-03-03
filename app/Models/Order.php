<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderNo',
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'street',
        'neighborhood',
        'promoter',
        'discount',
        'total',
        'payment_method',
        'Status',
    ];

    public function ReferencedBy()
    {
        return $this->belongsTo(User::class, 'promoter', 'id');
    }

    /**
     * Get all of the orders for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function($model){
            $lastCol = Order::max('id');
            $model->orderNo = 'Order' . str_pad($lastCol+1,6,'0',STR_PAD_LEFT);
        });
    }
}
