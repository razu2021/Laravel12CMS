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

        $category = CategoryPage::with(['subCategory.childCategory'])->where('public_status',1)->get();

        return view('frontend.index',compact('category'));
    }


    public function categoryPage($category){


        return view('frontend.category');
    }

    public function subCategoryPage($category,$subcategory){
    
        return view('frontend.subcategory');
    }
    public function childCategoryPage($category,$subcategory,$childcategory){

        return view('frontend.childcategory');
    }

    
}
