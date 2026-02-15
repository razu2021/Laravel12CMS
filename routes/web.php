<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\frontend\frontendController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;





Route::get('/',[frontendController::class , 'index'])->name('index');



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














Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//--- custome route 










require __DIR__.'/backend.php';
require __DIR__.'/settings.php';

