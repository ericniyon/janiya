<?php

namespace App\Observers;

use App\Models\Vendor;
use Illuminate\Support\Str;

class VendorObserver
{
    /**
     * Handle the Vendor "created" event.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return void
     */
    public function creating(Vendor $vendor)
    {
        $vendor->slug = Str::slug($vendor->shop_name);
    }

    /**
     * Handle the Vendor "updated" event.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return void
     */
    public function updated(Vendor $vendor)
    {
        //
    }

    /**
     * Handle the Vendor "deleted" event.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return void
     */
    public function deleted(Vendor $vendor)
    {
        //
    }

    /**
     * Handle the Vendor "restored" event.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return void
     */
    public function restored(Vendor $vendor)
    {
        //
    }

    /**
     * Handle the Vendor "force deleted" event.
     *
     * @param  \App\Models\Vendor  $vendor
     * @return void
     */
    public function forceDeleted(Vendor $vendor)
    {
        //
    }
}
