<?php

namespace App\Observers;

use App\Models\Manageheader;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class ManageheaderObserver
{
    /**
     * Handle the Manageheader "created" event.
     */
    public function created(Manageheader $manageheader): void
    {
        //======= forget cache ----
        Cache::forget('manageheader');
    }

    /**
     * Handle the Manageheader "updated" event.
     */
    public function updated(Manageheader $manageheader): void
    {
        Log::info('update is working ');
        //======= forget cache ----
        Cache::forget('manageheader');
    }

    /**
     * Handle the Manageheader "deleted" event.
     */
    public function deleted(Manageheader $manageheader): void
    {
        //======= forget cache ----
        Cache::forget('manageheader');
    }

    /**
     * Handle the Manageheader "restored" event.
     */
    public function restored(Manageheader $manageheader): void
    {
        //======= forget cache ----
        Cache::forget('manageheader');
    }

    /**
     * Handle the Manageheader "force deleted" event.
     */
    public function forceDeleted(Manageheader $manageheader): void
    {
        //======= forget cache ----
        Cache::forget('manageheader');
    }
}
