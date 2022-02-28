<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'coupon_code',
        'type',
        'expire_at',
        'value'
    ];

    protected $dates = ['expire_at'];
}
