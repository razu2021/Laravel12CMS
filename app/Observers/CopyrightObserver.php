<?php

namespace App\Observers;

use App\Models\Copyright;

class CopyrightObserver
{
    /**
     * Handle the Copyright "created" event.
     */
    public function created(Copyright $copyright): void
    {
        //
    }

    /**
     * Handle the Copyright "updated" event.
     */
    public function updated(Copyright $copyright): void
    {
        //
    }

    /**
     * Handle the Copyright "deleted" event.
     */
    public function deleted(Copyright $copyright): void
    {
        //
    }

    /**
     * Handle the Copyright "restored" event.
     */
    public function restored(Copyright $copyright): void
    {
        //
    }

    /**
     * Handle the Copyright "force deleted" event.
     */
    public function forceDeleted(Copyright $copyright): void
    {
        //
    }
}
