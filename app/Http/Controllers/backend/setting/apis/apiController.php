<?php

namespace App\Http\Controllers\backend\setting\apis;

use App\Http\Controllers\Controller;
use App\Services\ApiManager;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function test(){

        $configs = ApiManager::allConfig('captcha','recaptcha');

        dd($configs);
        return "test payment";
    }
}
