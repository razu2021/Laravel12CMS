<?php
namespace App\Http\Controllers\backend\setting;

use App\Http\Controllers\Controller;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\CategoryPage;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB; // উপরে এটি অ্যাড করুন

class SitemapController extends Controller{

    public function generateSitemap() {
        $path = public_path('sitemap.xml');
        $sitemap = Sitemap::create();

        // হোম পেজ
        $sitemap->add(Url::create('/')->setPriority(1.0));

        // get category from category database 
        $categories = DB::table('category_pages')->select('url','id')->get();
        //=================================  category sub category childcategoy =======================================
        foreach ($categories as $category) {
            // ------------- create category sitemap --------
            $sitemap->add(Url::create("/{$category->url}")->setPriority(0.9));

            // get subcategory from subcategory databse relaton with category id 
            $subcategorys = DB::table('sub_category_pages')->where('category_id',$category->id)->select('url','id')->get();

            foreach( $subcategorys as $sub){
                // ------------- create category sitemap --------
                $sitemap->add(Url::create("/{$category->url}/$sub->url")->setPriority(0.8));

                //------------------
                $childcategorys = DB::table('child_category_pages')->where('subcategory_id',$sub->id ?? 0)->select('url')->get();

                //----------- 
                foreach($childcategorys as $child){
                    $sitemap->add(Url::create("/{$category->url}/$sub->url/$child->url")->setPriority(0.7));

                }
            }
        }

        //=================================  category sub category childcategoy =======================================



        $sitemap->writeToFile($path);
        return "Done!";
    }

}