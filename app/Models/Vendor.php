<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Laravel\Sanctum\HasApiTokens;

class Vendor extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable, HasApiTokens;

        protected $guard = 'vendor';

        protected $fillable = [
            'name', 'shop_name', 'email', 'phone', 'confirmed', 'active', 'details', 'slug',
            'profile',
             'password',
             'banner',
              'district_id',
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

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [
            'user' => Vendor::where('email', $this->email)->get(),];
    }
}
