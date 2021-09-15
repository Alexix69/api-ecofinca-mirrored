<?php

use App\Http\Controllers\CantonController;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\ParroquiaController;
use App\Http\Controllers\ProvinciaController;
use App\Http\Controllers\UserController;
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

//AGREGAR RUTAS PARA LOS ENDPOINTS CREADOS
//AÑADIR RUTAS QUE DEVUELVAN TODOS LOS CANTONES DE UNA PROVINCIA Y TODAS LAS PARROQUIAS DE UN CANTON

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'authenticate']);

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('/user', [UserController::class, 'getAuthenticatedUser']);
    Route::get('/users', [UserController::class, 'index']);
    Route::get('/users/{user}', [UserController::class, 'show']);
    Route::put('/users/{user}', [UserController::class, 'update']);
//    Route::get('users/{user}/image', [UserController::class, 'image']);

    //RUTAS PARA LA ENTREGA centro de acopio
    Route::get('deliveries', [DeliveryController::class, 'index']);
    Route::get('deliveries/{delivery}', [DeliveryController::class, 'show']);

    //RUTAS PARA LA ENTREGA dueño de finca

    Route::post('deliveries', [DeliveryController::class, 'store']);
    Route::put('deliveries/{delivery}', [DeliveryController::class, 'update']);
//    Route::delete('deliveries/{delivery}', [DeliveryController::class, 'delete']);
    Route::get('deliveries/{delivery}/image', [DeliveryController::class, 'image']);


    //RUTAS PARA las provincias
    Route::get('provincias', [ProvinciaController::class, 'index']);
    Route::get('provincias/{provincia}', [ProvinciaController::class, 'show']);
//    Route::post('provincias', [ProvinciaController::class, 'store']);
//    Route::put('provincias/{provincia}', [ProvinciaController::class, 'update']);
//    Route::delete('provincias/{provincia}', [ProvinciaController::class, 'delete']);

    //RUTAS PARA Los cantones
    Route::get('cantones', [CantonController::class, 'index']);
    Route::get('cantones/{canton}', [CantonController::class, 'show']);
//    Route::post('cantones', [CantonController::class, 'store']);
//    Route::put('cantones/{canton}', [CantonController::class, 'update']);
//    Route::delete('cantones/{canton}', [CantonController::class, 'delete']);

    //RUTAS PARA Las parroquias
    Route::get('parroquias', [ParroquiaController::class, 'index']);
    Route::get('parroquias/{parroquia}', [ParroquiaController::class, 'show']);
//    Route::post('parroquias', [ParroquiaController::class, 'store']);
//    Route::put('parroquias/{parroquia}', [ParroquiaController::class, 'update']);
//    Route::delete('parroquias/{parroquia}', [ParroquiaController::class, 'delete']);
});






