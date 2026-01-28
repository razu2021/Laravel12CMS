<?php

use App\Http\Controllers\backend\cms\CategoryPageController;
use App\Http\Controllers\frontend\frontendController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canRegister' => Features::enabled(Features::registration()),
//     ]);
// })->name('home');


// home route start here =========

Route::get('/',[frontendController::class , 'index'])->name('home');


Route::prefix('/dashboad/category/category-page/')->group(function(){
    Route::get('all',[CategoryPageController::class ,'index'])->name('category_page_all');
    Route::get('add',[CategoryPageController::class ,'add'])->name('category_page_add');
    Route::get('view/{id}/{slug}',[CategoryPageController::class ,'view'])->name('category_page_view');
    Route::get('edit/{id}/{slug}',[CategoryPageController::class ,'edit'])->name('category_page_edit');
    Route::post('submit',[CategoryPageController::class ,'insert'])->name('category_page_submit');
    Route::post('update',[CategoryPageController::class ,'update'])->name('category_page_update');
});


Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//--- custome route 


Route::get('admin/dashboard',function(){
    return Inertia::render('admin/AdminDashboard');
});









require __DIR__.'/settings.php';
