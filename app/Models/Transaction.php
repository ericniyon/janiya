<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'tx_ref','amount','currency','charged_amount','processor_response','payment_type','phone_number' ,'email' ,'status',
    ];
}
