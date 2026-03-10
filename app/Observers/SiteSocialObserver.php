<?php

namespace App\Observers;

use App\Models\SiteSocial;

class SiteSocialObserver
{
    /**
     * Handle the SiteSocial "created" event.
     */
    public function created(SiteSocial $siteSocial): void
    {
        //
    }

    /**
     * Handle the SiteSocial "updated" event.
     */
    public function updated(SiteSocial $siteSocial): void
    {
        //
    }

    /**
     * Handle the SiteSocial "deleted" event.
     */
    public function deleted(SiteSocial $siteSocial): void
    {
        //
    }

    /**
     * Handle the SiteSocial "restored" event.
     */
    public function restored(SiteSocial $siteSocial): void
    {
        //
    }

    /**
     * Handle the SiteSocial "force deleted" event.
     */
    public function forceDeleted(SiteSocial $siteSocial): void
    {
        //
    }
}
