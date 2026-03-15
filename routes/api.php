<?php

use App\Http\Controllers\backend\setting\apis\apiController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


/**============  Category Page Route Start here =========== */
Route::controller(apiController::class)->prefix('all/payment/handle/test/')->name('payment.')->group(function(){
    Route::get('test','test')->name('test');
});