<?php

namespace App\Http\Controllers\backend\cms;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;
use Carbon\Carbon; //----------  defualt -------
use Illuminate\Support\Str;
use App\Models\CategoryPage;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class CategoryPageController extends Controller
{
    public function index(Request $request)
    {
        $query = CategoryPage::query(); 


       
        if($request->filled('search')){
            $query->where('name','LIKE', '%' .$request->search .'%');
        }

            // 📅 Status Filter
        if ($request->filled('status')) {
            $query->where('public_status', $request->status);
        }




        $alldata = $query->paginate(10)->withQueryString();

       

        return Inertia::render('backend/cms/category/index',[
            'alldata' => $alldata ,
            'filters' => $request->only(['search','status'])
        ]);
    }


    public function add()
    {
        return Inertia::render('backend/cms/category/add');
       
    }
    public function view($id,$slug)
    {
        $data = CategoryPage::with(['creator','editor'])->where('id',$id)->where('slug',$slug)->firstOrFail();
        return Inertia::render('backend/cms/category/show',[
            'data' => $data
        ]);
       
    }
    public function edit($id,$slug)
    {
        $data = CategoryPage::with(['creator','editor'])->where('id',$id)->where('slug',$slug)->firstOrFail();
        return Inertia::render('backend/cms/category/edit',[
            'data' => $data
        ]);
       
    }




    /**
     * =======================================================================
     * ==============================================================================================  CREATE FUNCTION START HERE ========================================================
     * =======================================================================
     */
    public function insert(Request $request){
         /**--- validation code -- */
        $request->validate( [
                'name' => ['required', 'string', 'max:255',Rule::unique('category_pages','name')],
                'slug' => ['required', 'string', 'max:255', Rule::unique('category_pages','url')],
               
            ],[
                'name.required'=> 'Name field is Required !',
                'slug.required'=> 'Slug field is Required !',
                'name.unique'=> 'This name already exists. !',
                'slug.unique'=> 'This URL already exists. !',
            ]
        );

        //---------- get authenticate use id and create a slug
        $creator_id = Auth::user()->id;
        $slug = uniqid('20').Str::random(20) . '_'.mt_rand(10000, 100000).'-'.time();

        //------- make a custom url for -------
        $categoryname = strtolower($request->name);
        $user_input_url  = strtolower($request->slug) ;
        if(!empty($user_input_url)){
            $url = Str::slug($user_input_url); // Output: "my-new-category-name"
        }else{
            $url = Str::slug($categoryname); // Output: "my-new-category-name"
        }

        // ----- insert record into database 
        $insert = CategoryPage::create([
            'name'=>$request->name,
            'title'=>$request->title,
            'description'=>$request->description,
            'url'=>$url,
            'order'=>$request->order,
            'public_status'=>$request->public_status ?? 0,
            'slug'=>$slug,
            'creator_id' => $creator_id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        flash()->success('created successfully!');
          return redirect()->back();
        


    }





    /**
     * 
     * ============ Update information function start here ===========
     */

    public function update(Request $request){
        /**--- validation code -- */
        $category = CategoryPage::where('id',$request->id)->first();
        $request->validate( [
                'name' => ['required', 'string', 'max:255',Rule::unique('category_pages','name')->ignore($category->id)],
                'url' => ['required', 'string', 'max:255', Rule::unique('category_pages','url')->ignore($category->id)],
               
            ],[
                'name.required'=> 'Name field is Required !',
                'url.required'=> 'Slug field is Required !',
                'name.unique'=> 'This name already exists. !',
                'url.unique'=> 'This URL already exists. !',
            ]
        );

        //---------- get authenticate use id and create a slug
        $editor_id = Auth::user()->id;
        $slug = $request->slug;
        $id = $request->id;

        //------- make a custom url for -------
        $categoryname = strtolower($request->name);
        $user_input_url  = strtolower($request->url) ;
        if(!empty($user_input_url)){
            $url = Str::slug($user_input_url); // Output: "my-new-category-name"
        }else{
            $url = Str::slug($categoryname); // Output: "my-new-category-name"
        }

        // ----- insert record into database 
        $update = CategoryPage::where('id',$id)->where('slug',$slug)->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'description'=>$request->description,
            'url'=>$url,
            'order'=>$request->order,
            'public_status'=>$request->public_status ?? 0,
            'editor_id' => $editor_id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            flash()->success('Information Updated successfully!');
            return redirect()->route('category_page.view',[$id,$slug]);
        }else{
            flash()->error('Information Updated Faild !');
            return redirect()->back();
        }

        
    }




    /**
     * ======== Active Functionality Start here ==========
     */
    public function active($id,$slug){
        $active = CategoryPage::where('id',$id)->where('slug',$slug)->where('public_status',0)->update([
            'public_status' => 1,
        ]);

        if($active){
            flash()->success('Status Updated Successfully !');
        }else{
            flash()->error('Status Updated Faild !');
        }

        return redirect()->back();
    }

    /**
     * ======== De Active Functionality Start here ==========
     */
    public function deactive($id,$slug){

        $active = CategoryPage::where('id',$id)->where('slug',$slug)->where('public_status',1)->update([
            'public_status' => 0,
        ]);

        if($active){
            flash()->success('Status Updated Successfully !');
        }else{
            flash()->error('Status Updated Faild !');
        }

        return redirect()->back();
    }
    /**
     * ======== Soft Delete Functionality Start here ==========
     */
    public function softdelete($id){
        $data= CategoryPage::where('id',$id)->first();
        $data->delete();

        if ($data) {
        flash()->success('Record deleted successfully!');
        } else {
            flash()->error('Failed to delete record!');
        }

        return back();
    }
    /**
     * ========  Delete Functionality Start here ==========
     */
    public function delete($id,$slug){
        return 'ok';
    }
    /**
     * ========  Recycle Functionality Start here ==========
     */
    public function recycle($id,$slug){
        return 'ok';
    }






/**
 * ============== Bulk Action Function start here=====================
 * ==========================
 * =======================================================================================================================
 */

    public function bulkAction(Request $request){
        
        //-------- get multiple ids, type or bulk record 
        $ids = $request->input('ids', []);
        $action = $request->input('action');

        if (empty($ids)) {
            return response()->json(['success' => false, 'message' => 'No IDs selected.']);
        }
    

        // ---------- soft delete code start here 
        if($action === 'delete'){
            $data = CategoryPage::whereIn('id',$ids)->delete();
            return back();
        }

        // ---------- Multiple Items active code start here ----------
        if($action === 'active'){
            $categorys = CategoryPage::whereIn('id',$ids)->where('public_status',0)->update([
                'public_status'=>1,
            ]);
 
        }
        // ---------- Multiple Items Inactive code start here ----------
        if($action === 'InActive'){
            $categorys = CategoryPage::whereIn('id',$ids)->where('public_status',1)->update([
                'public_status'=>0,
            ]);
        }



      
        return back();

    }










}
