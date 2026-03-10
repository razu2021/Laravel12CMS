<?php

namespace App\Observers;

use App\Models\SiteEmail;

class SiteEmailObserver
{
    /**
     * Handle the SiteEmail "created" event.
     */
    public function created(SiteEmail $siteEmail): void
    {
        //
    }

    /**
     * Handle the SiteEmail "updated" event.
     */
    public function updated(SiteEmail $siteEmail): void
    {
        //
    }

    /**
     * Handle the SiteEmail "deleted" event.
     */
    public function deleted(SiteEmail $siteEmail): void
    {
        //
    }

    /**
     * Handle the SiteEmail "restored" event.
     */
    public function restored(SiteEmail $siteEmail): void
    {
        //
    }

    /**
     * Handle the SiteEmail "force deleted" event.
     */
    public function forceDeleted(SiteEmail $siteEmail): void
    {
        //
    }
}
