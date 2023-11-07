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
            'name', 'shop_name', 'email', 'phone', 'confirmed', 'active', 'details', 'slug', 
            'profile',
             'password',
             'banner',
              'district_id',
              'brand',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];

        public function getRouteKeyName()
        {
            return 'slug';
        }

        public function boughtProducts()
        {
            return $this->hasMany(Store::class, 'vendor_id', 'id');
        }

        /**
         * Get all of the orderItems for the Vendor
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function orderItems()
        {
            return $this->hasMany(OrderItem::class, 'shop', 'id');
        }
}
