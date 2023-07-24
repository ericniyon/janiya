<?php

namespace App\Models;

use App\Observers\VendorObserver;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $guard = 'vendor';

    protected $dates = ['deleted_at','email_verified_at'];

    protected $fillable = [
        'shop_name',
        'location',
        'slug',
        'email',
        'phone',
        'contact_person',
        'contact_person_email',
        'contact_person_phone',
        'confirmed',
        'active',
        'details',
        'email_verified_at',
        'password',
        'profile_image',
        'cover_image',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get all of the products for the Vendor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'vendor_id', 'id');
    }

    protected static function booted(){
        self::observe(VendorObserver::class);
    }
}
