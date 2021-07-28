<?php

use App\Http\Controllers\CantonController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\UserController;
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

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'authenticate']);

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('/user', [UserController::class, 'getAuthenticatedUser']);

    //RUTAS PARA LA ENTREGA
    Route::get('deliveries', [DeliveryController::class, 'index']);
    Route::get('deliveries/{delivery}', [DeliveryController::class, 'show']);
    Route::post('deliveries', [DeliveryController::class, 'store']);
    Route::put('deliveries/{delivery}', [DeliveryController::class, 'update']);
    Route::delete('deliveries/{delivery}', [DeliveryController::class, 'delete']);
});
//RUTAS PARA las provincias
Route::get('provincias', [ProvinciaController::class, 'index']);
Route::get('provincias/{provincia}', [ProvinciaController::class, 'show']);
Route::post('provincias', 'ProvinciaController@store');
Route::put('provincias/{provincia}', 'ProvinciaController@update');
Route::delete('provincias/{provincia}', 'ProvinciaController@delete');
//RUTAS PARA Las parroquias
Route::get('parroquias', 'ParroquiaController@index');
Route::get('parroquias/{parroquia}', 'ParroquiaController@show');
Route::post('parroquias', 'ParroquiaController@store');
Route::put('parroquias/{parroquia}', 'ParroquiaController@update');
Route::delete('parroquias/{parroquia}', 'ParroquiaController@delete');
//RUTAS PARA Los cantones
Route::get('cantones', [CantonController::class, 'index']);
Route::get('cantones/{canton}', [CantonController::class, 'show']);
Route::post('cantones', 'CantonController@store');
Route::put('cantones/{canton}', 'CantonController@update');
Route::delete('cantones/{canton}', 'CantonController@delete');
