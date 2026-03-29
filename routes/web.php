<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\frontend\frontendController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;





Route::get('/',[frontendController::class , 'index'])->name('index');

Route::get('site/manage/users/dashboard/', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified','role_check:user'])->name('dashboard');



// ========= section design route 
Route::get('/section',[frontendController::class , 'section'])->name('section');

// --------- otehr route file 
require __DIR__.'/backend.php';
require __DIR__.'/sitesetting.php';
require __DIR__.'/api.php';
require __DIR__.'/settings.php';






// home route start here =========
 
 
    Route::get('{category}',[frontendController::class , 'categoryPage'])->name('categorypage');

    // --- Sub category page route start here -----
    Route::get('{category}/{subcategory}',[frontendController::class , 'subCategoryPage'])->name('sub_categorypage');


    // --- Sub category page route start here -----
    Route::get('{category}/{subcategory}/{childcategory}',[frontendController::class , 'childCategoryPage'])->name('child_CategoryPage');







// Route::controller(AjaxController::class)->prefix('ajax/')->name('ajax_data.')->group(function(){
//     Route::get('all','index')->name('all');
//     Route::get('add','add')->name('add');
//     Route::get('view','view')->name('view');
//     Route::get('edit','edit')->name('edit');
//     Route::post('submit','insert')->name('submit');
//     Route::post('update','update')->name('update');
// });














//--- custome route 












