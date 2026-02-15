<?php

use App\Http\Controllers\backend\AdminController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\backend\cms\CategoryPageController;
use App\Http\Controllers\backend\cms\ChildCategoryPageController;
use App\Http\Controllers\backend\cms\manage\heroController;
use App\Http\Controllers\backend\cms\pageManagementController;
use App\Http\Controllers\backend\cms\PageSectionController;
use App\Http\Controllers\backend\cms\SubCategoryPageController;

/**
 * =========================
 * ============================== Route Group with Middleware =============
 * =============
 */
Route::middleware('auth')->group(function(){
/**
* ======== middleware group start here ====================================
*/

Route::prefix('site/manage/admin/')->group(function(){
    Route::get('/dashboard',[AdminController::class,'adminDashboard'])->name('admin_dashboard');

});



/**=========== page management route start here ========== */
Route::controller(pageManagementController::class)->prefix('admin/dashboad/manage/pages/')->name('all_pages.')->group(function(){
    Route::get('category','categoryPage')->name('categorypage');
    Route::get('category/page/{section}','categoryPageSection')->name('categorypage_section');
    //--------- subcategory route start  here --------
    Route::get('sub-category','subCategoryPage')->name('Subcategorypage');
    Route::get('sub-category/page/{section}','subCategoryPageSection')->name('sub_categorypage_section');
    //--------- subcategory route start  here --------
    Route::get('child-category','childCategoryPage')->name('Child_Category_page');
    Route::get('child-category/page/{section}','childCategoryPageSection')->name('child_categorypage_section');



});












/**============  Category Page Route Start here =========== */
Route::controller(CategoryPageController::class)->prefix('admin/dashboad/category/category-page/')->name('category_page.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}/{slug}','view')->name('view');
    Route::get('edit/{id}/{slug}','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::patch('update','update')->name('update');
    Route::get('active/{id}/{slug}','active')->name('active');
    Route::get('deactive/{id}/{slug}','deactive')->name('deactive');
    Route::delete('softdelete/{id}','softdelete')->name('softdelete');
    Route::delete('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
    Route::post('bulk/action' ,'bulkAction')->name('bulkAction');
    Route::get('export/single/pdf/{id}/{slug}','exportPdf')->name('single_pdf_export');
    Route::get('export/excel','export_excel')->name('export_excel');
    Route::get('export/csv','export_csv')->name('export_csv');
    Route::get('export/pdf','export_pdf')->name('export_pdf');
});
/**============  Category Page Route Start here =========== */
Route::controller(SubCategoryPageController::class)->prefix('admin/dashboad/category/sub-category-page/')->name('sub_category_page.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}/{slug}','view')->name('view');
    Route::get('edit/{id}/{slug}','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::patch('update','update')->name('update');
    Route::get('active/{id}/{slug}','active')->name('active');
    Route::get('deactive/{id}/{slug}','deactive')->name('deactive');
    Route::delete('softdelete/{id}','softdelete')->name('softdelete');
    Route::delete('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
    Route::post('bulk/action' ,'bulkAction')->name('bulkAction');
    Route::get('export/single/pdf/{id}/{slug}','exportPdf')->name('single_pdf_export');
    Route::get('export/excel','export_excel')->name('export_excel');
    Route::get('export/csv','export_csv')->name('export_csv');
    Route::get('export/pdf','export_pdf')->name('export_pdf');
});
/**============  Category Page Route Start here =========== */
Route::controller(ChildCategoryPageController::class)->prefix('admin/dashboad/category/child-category-page/')->name('child_category_page.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}/{slug}','view')->name('view');
    Route::get('edit/{id}/{slug}','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::patch('update','update')->name('update');
    Route::get('active/{id}/{slug}','active')->name('active');
    Route::get('deactive/{id}/{slug}','deactive')->name('deactive');
    Route::delete('softdelete/{id}','softdelete')->name('softdelete');
    Route::delete('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
    Route::post('bulk/action' ,'bulkAction')->name('bulkAction');
    Route::get('export/single/pdf/{id}/{slug}','exportPdf')->name('single_pdf_export');
    Route::get('export/excel','export_excel')->name('export_excel');
    Route::get('export/csv','export_csv')->name('export_csv');
    Route::get('export/pdf','export_pdf')->name('export_pdf');
    Route::get('get/subcategory/{categoryId}','getSubcategory')->name('getsubcategory');
});
/**============ Page section manage Route Start here =========== */
Route::controller(PageSectionController::class)->prefix('admin/dashboad/manage/page-section/')->name('page_section.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add','add')->name('add');
    Route::get('view/{id}/{slug}','view')->name('view');
    Route::get('edit/{id}/{slug}','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::patch('update','update')->name('update');
    Route::get('active/{id}/{slug}','active')->name('active');
    Route::get('deactive/{id}/{slug}','deactive')->name('deactive');
    Route::delete('softdelete/{id}','softdelete')->name('softdelete');
    Route::delete('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
    Route::post('bulk/action' ,'bulkAction')->name('bulkAction');
    Route::get('export/single/pdf/{id}/{slug}','exportPdf')->name('single_pdf_export');
    Route::get('export/excel','export_excel')->name('export_excel');
    Route::get('export/csv','export_csv')->name('export_csv');
    Route::get('export/pdf','export_pdf')->name('export_pdf');


    Route::get('get/category/page','getCategory')->name('getCategory');
    Route::get('get/subcategory/page','getSubcategory')->name('getsubcategory');
    Route::get('get/childcategory/page','getChildcategory')->name('getchildcategory');
});

  


/**
 * =========================
 * -=========================== Manage content route start here ==============
 * ====================================================================================
 */



/**============ Page section manage Route Start here =========== */
Route::controller(heroController::class)->prefix('admin/dashboad/manage/section/hero')->name('hero.')->group(function(){
    Route::get('all','index')->name('all');
    Route::get('add/{id}/{slug}','add')->name('add');
    Route::get('view/{id}/{slug}','view')->name('view');
    Route::get('edit/{id}/{slug}','edit')->name('edit');
    Route::post('submit','insert')->name('submit');
    Route::patch('update','update')->name('update');
    Route::get('active/{id}/{slug}','active')->name('active');
    Route::get('deactive/{id}/{slug}','deactive')->name('deactive');
    Route::delete('softdelete/{id}','softdelete')->name('softdelete');
    Route::delete('delete/{id}','delete')->name('delete');
    Route::get('recycle','recycle')->name('recycle');
    Route::post('bulk/action' ,'bulkAction')->name('bulkAction');
    Route::get('export/single/pdf/{id}/{slug}','exportPdf')->name('single_pdf_export');
    Route::get('export/excel','export_excel')->name('export_excel');
    Route::get('export/csv','export_csv')->name('export_csv');
    Route::get('export/pdf','export_pdf')->name('export_pdf');


    Route::get('get/category/page','getCategory')->name('getCategory');
    Route::get('get/subcategory/page','getSubcategory')->name('getsubcategory');
    Route::get('get/childcategory/page','getChildcategory')->name('getchildcategory');
});












/**=============== middleware groupe end here =========== */
});
/**=============== middleware groupe end here =========== */


