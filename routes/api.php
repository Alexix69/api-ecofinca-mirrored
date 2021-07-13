<?php

use App\Models\Collection_Center_Plastic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
   return $request->user();
});*/

Route::get('/collection_center_plastic', function (){
   return Collection_Center_Plastic::all();
});

Route::get('/collection_center_plastic/{id}', function ($id){
    return Collection_Center_Plastic::find($id);
});

