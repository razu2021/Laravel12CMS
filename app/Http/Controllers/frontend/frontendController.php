<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CategoryPage;
use App\Models\ChildCategoryPage;
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


    /**==
     * ============== Subcategory page functionality start here -=============
     * ======================
     */

    public function subCategoryPage($category,$subcategory){

        $category = CategoryPage::where('url',$category)->first();


        $subcategorys = SubCategoryPage::with(['getCategorySection'])->where('url',$subcategory)->first();

     //dd( $subcategorys);

        return view('frontend.subcategory',compact('subcategorys'));
    }







    public function childCategoryPage($category,$subcategory,$childcategory){

        $childCategorys = ChildCategoryPage::with(['getCategorySection'])->where('url',$childcategory)->first();

        return view('frontend.childcategory',compact('childCategorys'));
    }

    
}
