<?php

namespace App\Observers;

use App\Models\Customcss;

class customcssObserver
{
    /**
     * Handle the Customcss "created" event.
     */
    public function created(Customcss $customcss): void
    {
        //
    }

    /**
     * Handle the Customcss "updated" event.
     */
    public function updated(Customcss $customcss): void
    {
        //
    }

    /**
     * Handle the Customcss "deleted" event.
     */
    public function deleted(Customcss $customcss): void
    {
        //
    }

    /**
     * Handle the Customcss "restored" event.
     */
    public function restored(Customcss $customcss): void
    {
        //
    }

    /**
     * Handle the Customcss "force deleted" event.
     */
    public function forceDeleted(Customcss $customcss): void
    {
        //
    }
}
