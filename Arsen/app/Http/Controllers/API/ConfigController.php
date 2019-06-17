<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;

class ConfigController extends Controller
{

    public function configCache(Request $request){
        if($request->token && $request->token == 'kasya'){
            return Artisan::call("config:cache");
        }else {
            return "fail";
        }
    }

}
