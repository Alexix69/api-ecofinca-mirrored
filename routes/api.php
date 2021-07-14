<?php

use App\Http\Controllers\Collection_Center_PlasticController;
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

Route::get('/collection_center_plastics', [Collection_Center_PlasticController::class, 'index']);
Route::get('/collection_center_plastics/{collection_center_plastic}', [Collection_Center_PlasticController::class, 'show']);
Route::post('/collection_center_plastics', [Collection_Center_PlasticController::class, 'store']);
Route::put('/collection_center_plastics/{collection_center_plastic}', [Collection_Center_PlasticController::class, 'update']);
Route::delete('/collection_center_plastics/{collection_center_plastic}', [Collection_Center_PlasticController::class, 'delete']);
