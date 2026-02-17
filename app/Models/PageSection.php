<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Hero;
use Illuminate\Support\Facades\Log;
class PageSection extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'id';
    protected $guarded = [];


    // --------- 

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id', 'id');
    }

    public function editor()
    {
        return $this->belongsTo(User::class, 'editor_id', 'id');
    }
    
    //=== define Relationship with Section Content model ->>>>>>>> start here =========
    public function heroSection(){
        return $this->hasMany(Hero::class,'page_section_id','id');
    }
    public function postSection(){
        return $this->hasMany(Post::class,'page_section_id','id');
    }

    
    protected array $sectionRelations = [
        'hero' => 'heroSection',
        'post' => 'postSection',

        // future 50+ models
    ];

        

    public function getContentsAttribute()
    {

        $relation = $this->sectionRelations[$this->dynamic_route] ?? null;
       
        if (!$relation || !method_exists($this, $relation)) {
            return collect(); // empty collection if no relation
        }

        if (!$this->relationLoaded($relation)) {
            $this->load($relation); // eager load if not already loaded
        }

        return $this->$relation;

      
    }
        
   















    //=== define Relationship with Section Content model ->>>>>>>> emd here =========




    //--------------- Relationship with sub category model 

    public function subCategory(){
        return $this->hasMany(SubCategoryPage::class,'category_id','id');
    }


    public function sectionable()
    {
        return $this->morphTo();
    }
    
    
    //---category page relationship 
    public function isCategory(){
        return $this->sectionable_type === \App\Models\CategoryPage::class;
    }

    //---category page relationship 
    public function isSubCategory(){
        return $this->sectionable_type === \App\Models\SubCategoryPage::class;
    }
    //---category page relationship 
    public function isChildCategory(){
        return $this->sectionable_type === \App\Models\ChildCategoryPage::class;
    }









}
