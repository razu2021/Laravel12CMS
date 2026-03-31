<?php

namespace App\Providers;

use App\Models\AnaliticsTracking;
use App\Models\CategoryPage;
use App\Models\Customcss;
use App\Models\Customescript;
use App\Models\Managefooter;
use App\Models\Manageheader;
use App\Models\Preloader;
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

            /**======== Custom Script cache  =========== */
            $customscript = cache()->rememberForever('customscript',function(){
         
               $csripts =  Customescript::where('public_status',1)->orderBy('order','ASC')->get(['custom_script','type']);
               return [
                    'header_script' => $csripts->where('type','header')->pluck('custom_script')->implode("\n"),
                    'footer_script' => $csripts->where('type','footer')->pluck('custom_script')->implode("\n"),
               ];
            });
            /**======== Custom Script cache  =========== */
            $customcss = cache()->rememberForever('customscss',function(){
                return Customcss::where('public_status',1)->orderBy('order','ASC')->pluck('custom_css')->implode("\n");
            });
           
            /**======== Footer cache  =========== */
            $preloader = cache()->rememberForever('preloaders',function(){
                return Preloader::where('public_status',1)->first();
            });

            /**======== Analitics & Tracking  cache  =========== */
            $analitics = cache()->rememberForever('AnaliticsTracking',function(){
                return AnaliticsTracking::where('public_status',1)->get(['key','value']);
            });
            
            /**
             * =========================================================
             * category subcategory and childcategory cache 
             * =========================================================
             */
            $categorys = cache()->rememberForever('allCategorys', function () {
                return CategoryPage::with([
                    'subCategory' => function ($q) {
                        $q->active()
                        ->ordered()
                        ->with([
                            'childCategory' => function ($q2) {
                                $q2->active()
                                    ->ordered();
                            }
                        ]);
                    }
                ])->whereNotIn('url', ['index', 'home'])->active()->ordered()->get();
            });













            // ====== share data globaly================
            $view->with([
                'manageheader' => $manageheader,
                'managefooter' => $managefooter,
                'customscript' => $customscript,
                'customcss' => $customcss,
                'preloader' => $preloader,
                'analitics' => $analitics,
                'categorys' => $categorys,
            ]);

        });


    /**
     * ===========================
     * ============== Share data globaly for all view vlade, or component or partials ============
     * =============================
     */







    }
}
