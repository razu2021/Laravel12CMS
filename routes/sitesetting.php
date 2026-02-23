<?php

use App\Http\Controllers\backend\setting\ApiSettingController;
use App\Http\Controllers\backend\setting\SiteAddressController;
use App\Http\Controllers\backend\setting\SiteEmailController;
use App\Http\Controllers\backend\setting\SitePhoneController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/**
 * =========================
 * ============================== Route Group with Middleware =============
 * =============
 */
Route::middleware(['auth','role_check:admin'])->group(function(){
/**
* ======== middleware group start here ====================================
*/



/**============ Contact Email Route Start here =========== */
Route::controller(SiteEmailController::class)->prefix('admin/dashboad/manage/setting/contact/email/')->name('contact_email.')->group(function(){
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
/**============ Contact Phone Route Start here =========== */
Route::controller(SitePhoneController::class)->prefix('admin/dashboad/manage/setting/contact/phone/')->name('contact_phone.')->group(function(){
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
/**============ Contact Phone Route Start here =========== */
Route::controller(SiteAddressController::class)->prefix('admin/dashboad/manage/setting/contact/address/')->name('contact_address.')->group(function(){
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
/**============ Contact Phone Route Start here =========== */
Route::controller(ApiSettingController::class)->prefix('admin/dashboad/manage/setting/api/api-setting/')->name('api_setting.')->group(function(){
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




























/**=============== middleware groupe end here =========== */
});
/**=============== middleware groupe end here =========== */


