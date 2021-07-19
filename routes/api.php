<?php

use App\Http\Controllers\DeliveryController;
use App\Models\Collection_Center_Plastic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;

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

//RUTAS CENTRO ACOPIO
Route::get('/collection_center_plastic', function (){
   return Collection_Center_Plastic::all();
});
Route::get('/collection_center_plastic/{id}', function ($id){
    return Collection_Center_Plastic::find($id);
});


//RUTAS PARA EL DUEÑO DE FINCA
Route::get('/owners', [OwnerController::class, 'index']);
Route::get('/owners/{owner}', [OwnerController::class, 'show']);
Route::post('/owners', [OwnerController::class, 'store']);
Route::put('/owners/{owner}', [OwnerController::class, 'update']);
Route::delete('/owners/{owner}', [OwnerController::class, 'delete']);

//RUTAS PARA LA ENTREGA
Route::get('delivery', [DeliveryController::class, 'index']);
Route::get('delivery/{delivery}', [DeliveryController::class, 'show']);
Route::post('delivery', [DeliveryController::class, 'store']);
Route::put('delivery/{delivery}', [DeliveryController::class, 'update']);
Route::delete('delivery/{delivery}', [DeliveryController::class, 'delete']);

