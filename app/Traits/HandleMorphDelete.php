<?php

namespace App\Traits;

use App\Models\PageSection;
use App\Models\Seo;

trait HandleMorphDelete
{
   
protected static function bootHandleMorphDelete(){
 
// ====== using for softdelete only =======
  static::deleting(function($model){

    if(!method_exists($model,'isForceDeleting') || !$model->isForceDeleting()){
    static::deleteMorphRelations($model,false);
    }
  });

//   ======= using for forchdelete only 
    static::forceDeleting(function($model){
        static::deleteMorphRelations($model,true);
    });


}




// ========= define the morphrelations function 

protected static function deleteMorphRelations($model,$isForce){

// ======== Delete SEO Table data 
    if(method_exists($model,'seo')){
        $data = Seo::where('seoable_id',$model->id)->where('seoable_type',get_class($model))->withTrashed();

        if ($data) {
            if ($isForce) {
                $data->forceDelete();
            } else {
                $data->delete(); // এখানে $model->seo()->delete() এর বদলে $data->delete() ব্যবহার করা বেশি নিরাপদ
            }
         }
    }
//======= Delete Pagesections table data relationship with pagesection
    if(method_exists($model,'pagesection') && $model->pagesection){
        $data = PageSection::where('sectionable_id',$model->id)->where('sectionable_type',get_class($model))->withTrashed();

        if($isForce){
            $data->withTrashed()->forceDelete();

        }else{
            $model->pagesection()->delete();
        }
    }


}



// =======  seo Relations =========
public function seo(){
    return $this->morphOne(Seo::class,'seoable');
}
// =======  pagesection Relations =========
public function pagesection(){
    return $this->morphMany(PageSection::class,'sectionable');
}



}
