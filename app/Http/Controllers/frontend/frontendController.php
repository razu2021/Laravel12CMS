<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CategoryPage;
use App\Models\SubCategoryPage;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    //---------- home page function start here 

    public function index(){

        $category = CategoryPage::with(['getCategorySection'])->where('public_status',1)->where('name','home')->first();

       

        return view('frontend.index',compact('category'));
    }


    public function categoryPage($category){

        $category = CategoryPage::with(['getCategorySection'])->where('public_status',1)->where('url',$category)->first();
        return view('frontend.category',compact('category'));

    }

    public function subCategoryPage($category,$subcategory){
    
        return view('frontend.subcategory');
    }
    public function childCategoryPage($category,$subcategory,$childcategory){

        return view('frontend.childcategory');
    }

    
}
