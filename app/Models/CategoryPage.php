<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class CategoryPage extends Model
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
    

    //--------------- Relationship with sub category model 

    public function subCategory(){
        return $this->hasMany(SubCategoryPage::class,'category_id','id');
    }













}
