<?php


use App\Http\Controllers\frontend\frontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canRegister' => Features::enabled(Features::registration()),
//     ]);
// })->name('home');


// home route start here =========

Route::get('/',[frontendController::class , 'index'])->name('home');

// --- category page route start here -----
Route::get('/{category}',[frontendController::class , 'categoryPage'])->name('categorypage');

// --- Sub category page route start here -----
Route::get('/{category}/{subcategory}',[frontendController::class , 'subCategoryPage'])->name('sub_categorypage');


// --- Sub category page route start here -----
Route::get('/{category}/{subcategory}/{childcategory}',[frontendController::class , 'childCategoryPage'])->name('child_CategoryPage');



// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


//--- custome route 











require __DIR__.'/settings.php';
require __DIR__.'/backend.php';
