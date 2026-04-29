<?php

namespace App\Traits;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
trait CacheBuster
{
   
    public static function bootCacheBuster(){
        

        static::created(function($model){
            $model->forgetSectionCache();
        });


    //======== data crate, update, active, inactive
        static::updated(function($model){
            $model->forgetSectionCache();
        });

        //====== data softdelete , forcedelete 
        static::deleted(function($model){
            $model->forgetSectionCache();
        });

        //====== soft delete data resote  
        static::restored(function($model){
            $model->forgetSectionCache();
        });

        static::forceDeleted(function($model){
            $model->forgetSectionCache();
        });

    }



    public function forgetSectionCache()
        {
            // আপনার কন্টেন্ট মডেলে pageSection রিলেশনটি থাকতে হবে
            $section = $this->pageSection;

            if ($section) {
                $cacheKey = "page_section_forever_{$section->id}_{$section->dynamic_route}";
                Cache::forget($cacheKey);
            } 
        }










}
