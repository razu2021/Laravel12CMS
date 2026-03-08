<?php

namespace App\Observers;

use App\Models\Customescript;

class CustomscriptObserver
{
    /**
     * Handle the Customescript "created" event.
     */
    public function created(Customescript $customescript): void
    {
        //
    }

    /**
     * Handle the Customescript "updated" event.
     */
    public function updated(Customescript $customescript): void
    {
        //
    }

    /**
     * Handle the Customescript "deleted" event.
     */
    public function deleted(Customescript $customescript): void
    {
        //
    }

    /**
     * Handle the Customescript "restored" event.
     */
    public function restored(Customescript $customescript): void
    {
        //
    }

    /**
     * Handle the Customescript "force deleted" event.
     */
    public function forceDeleted(Customescript $customescript): void
    {
        //
    }
}
