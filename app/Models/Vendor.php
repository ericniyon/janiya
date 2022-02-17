<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Vendor extends Authenticatable
{
    use HasFactory, Notifiable;

        protected $guard = 'vendor';

        protected $fillable = [
            'name', 'email', 'phone', 'confirmed', 'active', 'profile', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
