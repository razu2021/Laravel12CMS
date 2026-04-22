<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Casestudy;
use App\Models\CategoryPage;
use App\Models\ChildCategoryPage;
use App\Models\Countrydestination;
use App\Models\Event;
use App\Models\News;
use App\Models\Post;
use App\Models\Promot;
use App\Models\sectionx;
use App\Models\Service;
use App\Models\SubCategoryPage;
use App\Models\Team;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class frontendController extends Controller
{
    //---------- home page function start here 

    public function index(){

        $category = CategoryPage::with(['getCategorySection','seo'])->where('public_status',1)->where('name','home')->first();

        return view('frontend.index',compact('category'));
    }


    public function categoryPage($category){

        $category = CategoryPage::with(['getCategorySection','seo'])->where('public_status',1)->where('url',$category)->first();
   

        return view('frontend.category',compact('category'));

    }


    /**==
     * ============== Subcategory page functionality start here -=============
     * ======================
     */

    public function subCategoryPage($category,$subcategory){

        $category = CategoryPage::where('url',$category)->first();


        $subcategorys = SubCategoryPage::with(['getCategorySection','seo'])->where('url',$subcategory)->first();

     //dd( $subcategorys);

        return view('frontend.subcategory',compact('subcategorys'));
    }







    public function childCategoryPage($category,$subcategory,$childcategory){

        $childCategorys = ChildCategoryPage::with(['getCategorySection'])->where('url',$childcategory)->first();

        return view('frontend.childcategory',compact('childCategorys'));
    }

    


    /**
     * ===============================================================
     * All Details page functionality is start here 
     * ===============================================================
     */

    public function serviceDetails($id,$slug){
        $allservice = Service::where('public_status', 1)->where('id', '!=', $id)->inRandomOrder()->take(6)->get();
        $data = Service::where('id',$id)->firstOrFail();
        $correctslug = Str::slug($data->title);
        if($slug !== $correctslug){
            return redirect()->back();
        }
        return view('frontend.detailsPages.service_details',compact('data','allservice'));
    }
    // ================= service functionality end hre =================
    public function blogDetails($id,$slug){
        $all = Blog::where('public_status', 1)->where('id', '!=', $id)->inRandomOrder()->take(6)->get();
        $data = Blog::where('id',$id)->firstOrFail();
        $correctslug = Str::slug($data->title);
        if($slug !== $correctslug){
            return redirect()->back();
        }
        return view('frontend.detailsPages.blog_details',compact('data','all'));
    }
    // ================= service functionality end hre =================

    public function eventDetails($id,$slug){
        $all = Event::where('public_status', 1)->where('id', '!=', $id)->inRandomOrder()->take(6)->get();
        $data = Event::where('id',$id)->firstOrFail();
        $correctslug = Str::slug($data->title);
        if($slug !== $correctslug){
            return redirect()->back();
        }
        return view('frontend.detailsPages.event_details',compact('data','all'));
    }
    // ================= event functionality end hre =================
    public function postDetails($id,$slug){
        $all = Post::where('public_status', 1)->where('id', '!=', $id)->inRandomOrder()->take(6)->get();
        $data = Post::where('id',$id)->firstOrFail();
        $correctslug = Str::slug($data->title);
        if($slug !== $correctslug){
            return redirect()->back();
        }
        return view('frontend.detailsPages.post_details',compact('data','all'));
    }
    // ================= Post functionality end hre =================
    public function newsDetails($id,$slug){
        $all = News::where('public_status', 1)->where('id', '!=', $id)->inRandomOrder()->take(6)->get();
        $data = News::where('id',$id)->firstOrFail();
        $correctslug = Str::slug($data->title);
        if($slug !== $correctslug){
            return redirect()->back();
        }
        return view('frontend.detailsPages.news_details',compact('data','all'));
    }
    // ================= News functionality end hre =================
    public function promotDetails($id,$slug){
        $all = Promot::where('public_status', 1)->where('id', '!=', $id)->inRandomOrder()->take(6)->get();
        $data = Promot::where('id',$id)->firstOrFail();
        $correctslug = Str::slug($data->title);
        if($slug !== $correctslug){
            return redirect()->back();
        }
        return view('frontend.detailsPages.promot_details',compact('data','all'));
    }
    // ================= News functionality end hre =================

    public function casestudyDetails($id,$slug){
        $all = Casestudy::where('public_status', 1)->where('id', '!=', $id)->inRandomOrder()->take(6)->get();
        $data = Casestudy::where('id',$id)->firstOrFail();
        $correctslug = Str::slug($data->title);
        if($slug !== $correctslug){
            return redirect()->back();
        }
        return view('frontend.detailsPages.casestudy_details',compact('data','all'));
    }
    // ================= News functionality end hre =================

    public function countryDetails($id,$slug){
        $all = Countrydestination::where('public_status', 1)->where('id', '!=', $id)->inRandomOrder()->take(6)->get();
        $data = Countrydestination::where('id',$id)->firstOrFail();
        $correctslug = Str::slug($data->title);
        if($slug !== $correctslug){
            return redirect()->back();
        }
        return view('frontend.detailsPages.country_details',compact('data','all'));
    }
    // ================= News functionality end hre =================
    public function sectionxDetails($id,$slug){
        $all = sectionx::where('public_status', 1)->where('id', '!=', $id)->inRandomOrder()->take(6)->get();
        $data = sectionx::where('id',$id)->firstOrFail();
        $correctslug = Str::slug($data->title);
        if($slug !== $correctslug){
            return redirect()->back();
        }
        return view('frontend.detailsPages.sectionx_details',compact('data','all'));
    }
    // ================= News functionality end hre =================
    public function teamDetails($id,$slug){
        $all = Team::where('public_status', 1)->where('id', '!=', $id)->inRandomOrder()->take(6)->get();
        $data = Team::where('id',$id)->firstOrFail();
        $correctslug = Str::slug($data->title);
        if($slug !== $correctslug){
            return redirect()->back();
        }
        return view('frontend.detailsPages.team_details',compact('data','all'));
    }
    // ================= News functionality end hre =================












    public function section(){
        return view('frontend.section');
    }

}
