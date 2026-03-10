<?php

namespace App\Observers;

use App\Models\SiteAddress;

class SiteAddressObserver
{
    /**
     * Handle the SiteAddress "created" event.
     */
    public function created(SiteAddress $siteAddress): void
    {
        //
    }

    /**
     * Handle the SiteAddress "updated" event.
     */
    public function updated(SiteAddress $siteAddress): void
    {
        //
    }

    /**
     * Handle the SiteAddress "deleted" event.
     */
    public function deleted(SiteAddress $siteAddress): void
    {
        //
    }

    /**
     * Handle the SiteAddress "restored" event.
     */
    public function restored(SiteAddress $siteAddress): void
    {
        //
    }

    /**
     * Handle the SiteAddress "force deleted" event.
     */
    public function forceDeleted(SiteAddress $siteAddress): void
    {
        //
    }
}
