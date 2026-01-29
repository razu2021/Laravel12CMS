<?php


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




// Route::get('dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


//--- custome route 











require __DIR__.'/settings.php';
require __DIR__.'/backend.php';
