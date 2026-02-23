<?php

namespace App\Http\Controllers\backend\setting;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; //----------  defualt -------
use Barryvdh\DomPDF\Facade\Pdf;//-------------- export pdf
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\sitesetting\SiteEmailExport;
use Illuminate\Support\Str;
use App\Models\SiteEmail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;


class SiteEmailController extends Controller
{
    /**
     * ======== index page function 
     */
    public function index(Request $request)
    {
        $query = SiteEmail::query(); 

        if($request->filled('search')){
            $query->where('email','LIKE', '%' .$request->search .'%');
        }

            // 📅 Status Filter
        if ($request->filled('status')) {
            $query->where('public_status', $request->status);
        }

        $alldata = $query->paginate(10)->withQueryString();

        return Inertia::render('backend/sitesetting/siteemail/index',[
            'alldata' => $alldata ,
            'filters' => $request->only(['search','status'])
        ]);
    }

    /**
     * ======== create page or add page function 
     */

    public function add()
    {
        return Inertia::render('backend/sitesetting/siteemail/add');
       
    }

    /**
     * ======= view page or show page function 
     */
    public function view($id,$slug)
    {
        $data = SiteEmail::with(['creator','editor'])->where('id',$id)->where('slug',$slug)->firstOrFail();
        return Inertia::render('backend/sitesetting/siteemail/show',[
            'data' => $data
        ]);
       
    }

    /**
     * ======= edit or update page function 
     */
    public function edit($id,$slug)
    {
        $data = SiteEmail::with(['creator','editor'])->where('id',$id)->where('slug',$slug)->firstOrFail();
        return Inertia::render('backend/sitesetting/siteemail/edit',[
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
                'type' => ['required'],
                'email' => ['required', 'string', 'max:255'],

            ],[
                'email.required'=> 'Email field is Required !',
                'type.required'=> 'Type field is Required !',
            ]
        );

        //---------- get authenticate use id and create a slug
        $creator_id = Auth::user()->id;
        $slug = uniqid('20').Str::random(20) . '_'.mt_rand(10000, 100000).'-'.time();


        // ----- insert record into database 
        $insert = SiteEmail::create([
            'type'=>$request->type,
            'email'=>$request->email,
            'title'=>$request->title,
            'description'=>$request->description,
            'order'=>$request->order,
            'public_status'=>$request->public_status ?? 0,
            'slug'=>$slug,
            'creator_id' => $creator_id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        //---------------------- if insert ------
        if($insert){
            flash()->success('created successfully!');
        }else{
             flash()->error('created Faild!');
        }
        //---------------------- if insert ------

          return redirect()->back();
    

    }


    /**
     * 
     * ============ Update information function start here ===========
     */

    public function update(Request $request){
        /**--- validation code -- */
        $category = SiteEmail::where('id',$request->id)->first();
         /**--- validation code -- */
        $request->validate( [
                'type' => ['required'],
                'email' => ['required', 'string', 'max:255'],

            ],[
                'email.required'=> 'Email field is Required !',
                'type.required'=> 'Type field is Required !',
            ]
        );

        //---------- get authenticate use id and create a slug
        $editor_id = Auth::user()->id;
        $slug = $request->slug;
        $id = $request->id;
        // ----- insert record into database 
        $update = SiteEmail::where('id',$id)->where('slug',$slug)->update([
            'type'=>$request->type,
            'email'=>$request->email,
            'title'=>$request->title,
            'description'=>$request->description,
            'order'=>$request->order,
            'public_status'=>$request->public_status ?? 0,
            'editor_id' => $editor_id,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if($update){
            SiteEmail::normalizeOrder();
            flash()->success('Information Updated successfully!');
            return redirect()->route('contact_email.view',[$id,$slug]);
        }else{
            flash()->error('Information Updated Faild !');
            return redirect()->back();
        }

        
    }


    /**
     * ======== Active Functionality Start here ==========
     */
    public function active($id,$slug){
        $active = SiteEmail::where('id',$id)->where('slug',$slug)->where('public_status',0)->update([
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

        $active = SiteEmail::where('id',$id)->where('slug',$slug)->where('public_status',1)->update([
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
        $data= SiteEmail::where('id',$id)->first();
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
    public function delete($id){
        $data= SiteEmail::onlyTrashed()->where('id',$id)->first();
        
        if ($data) {
        $data->forceDelete();
        flash()->success('Record deleted successfully!');
        } else {
            flash()->error('Failed to delete record!');
        }

        return back();
    }

    /**
     * ========  Recycle Functionality Start here ==========
     */
    public function recycle(Request $request){
        $query = SiteEmail::query(); 

        $query->onlyTrashed();

        if($request->filled('search')){
            $query->where('name','LIKE', '%' .$request->search .'%');
        }

            // 📅 Status Filter
        if ($request->filled('status')) {
            $query->where('public_status', $request->status);
        }


        $alldata = $query->paginate(10)->withQueryString();

        return Inertia::render('backend/sitesetting/siteemail/recycle',[
            'alldata' => $alldata ,
            'filters' => $request->only(['search','status'])
        ]);
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
            $data = SiteEmail::whereIn('id',$ids)->delete();
            return back();
        }

        // ---------- Multiple Items active code start here ----------
        if($action === 'active'){
            $categorys = SiteEmail::whereIn('id',$ids)->where('public_status',0)->update([
                'public_status'=>1,
            ]);
 
        }
        // ---------- Multiple Items Inactive code start here ----------
        if($action === 'InActive'){
            $categorys = SiteEmail::whereIn('id',$ids)->where('public_status',1)->update([
                'public_status'=>0,
            ]);
        }
        // ---------- Multiple Items Heard Delete code start here ----------
        if($action === 'Heard_Delete'){
            $categorys = SiteEmail::onlyTrashed()->whereIn('id',$ids)->get();

                foreach ($categorys as $category) {
                    $category->forceDelete();
                }

        }
        // ---------- Multiple Items Heard Delete code start here ----------
        if($action === 'Restore'){
            $categorys = SiteEmail::onlyTrashed()->whereIn('id',$ids)->get();

                foreach ($categorys as $category) {
                    $category->restore();
                }

        }




        // ------------ Multiple Item Export as an PDF -------------------------------
        if($action === 'export_pdf'){
          
            $category = SiteEmail::whereIn('id',$ids)->get();

            $fileName = now()->format('Y-m-d_H-i-s') . '.pdf';

             $pdf = Pdf::loadView('backend.export.category.export_pdf', [
                'dataJson' => $category->toArray()
            ])->setPaper('a4', 'portrait');

            return $pdf->stream($fileName);
        }

        // ------------ Multiple Item Export as an Excel file -------------------------------

        if($action === 'export_excel'){

            return Excel::download(new SiteEmailExport($ids), now().'.xlsx');
        }
        if($action === 'export_csv'){

            return Excel::download(new SiteEmailExport($ids), now().'.csv');
        }
        return back();

    }





    /**
     * 
     * ================= export single pdf function start here ===========================
     */

    public function exportPdf($id,$slug){

        $data = SiteEmail::where('id',$id)->where('slug',$slug)->firstOrFail();
        $fileName = $data->name.'-'.now().'.pdf';
        $pdf = pdf::loadView('backend/export/category/export_singlepdf',compact('data'))->setPaper('a4', 'portrait');
        return $pdf->download($fileName);

    }


    /**
     * 
     * ================= export all pdf  function start here ===========================
     */
    public function export_pdf(){
        $data = SiteEmail::get();
        $fileName =now().'.pdf';
        $pdf = pdf::loadView('backend/export/category/export_pdf',[
            'dataJson' => $data->toArray()
        ])->setPaper('a4', 'portrait');
        return $pdf->download($fileName);
       
    }


    /**
     * 
     * ================= export Excel function start here ===========================
     */
    public function export_excel(){
        return Excel::download(new SiteEmailExport, now().'.xlsx');
    }
    /**
     * 
     * ================= export csv function start here ===========================
     */
    public function export_csv(){
        return Excel::download(new SiteEmailExport, now().'.csv');
    }


}
