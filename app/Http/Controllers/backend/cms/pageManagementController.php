<?php

namespace App\Http\Controllers\backend\cms;

use App\Http\Controllers\Controller;
use App\Models\CategoryPage;
use App\Models\PageSection;
use Illuminate\Http\Request;
use Inertia\Inertia;

class pageManagementController extends Controller
{
    /**
     * ========  all category page funcationality ====
     */
    public function categoryPage(){

        $allpage = CategoryPage::orderBy('order','ASC')->get();

        return Inertia::render('backend/cms/allpages/category_page',[
            'allpage' => $allpage,
        ]);
    }

    /**
     * ========= ctegory page section =======
    */

    public function categoryPageSection($section){
        $category = CategoryPage::where('id',$section)->firstOrFail();

        $sections = $category->getCategorySection()->get();

     
        return Inertia::render('backend/cms/allpages/categorypage_section',[
            'sections' => $sections,
        ]);
        
    }













/**============== ------------- ===============*/   
}
