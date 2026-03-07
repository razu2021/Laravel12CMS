<?php

namespace App\Providers;

use App\Models\Managefooter;
use App\Models\Manageheader;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class DataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        

    /**
     * ===========================
     * ============== Share data globaly for all view vlade, or component or partials ============
     * =============================
     */
        view::composer('*',function($view){
            /**======== header cache  =========== */
            $manageheader = cache()->rememberForever('manageheader',function(){
                return Manageheader::where('public_status',1)->orderBy('order','ASC')->get();
            });
            /**======== Footer cache  =========== */
            $managefooter = cache()->rememberForever('managefooter',function(){
                return Managefooter::where('public_status',1)->orderBy('order','ASC')->get();
            });
           










            // ====== share data globaly================
            $view->with([
                'manageheader' => $manageheader,
                'managefooter' => $managefooter,
            ]);

        });


    /**
     * ===========================
     * ============== Share data globaly for all view vlade, or component or partials ============
     * =============================
     */







    }
}
