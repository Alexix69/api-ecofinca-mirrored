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

// REGISTRO Y LOGIN => funcionan
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'authenticate']);

// RUTAS PROVINCIAS => FUNCIONAN
Route::get('/provincias', [ProvinciaController::class, 'index']);
Route::get('/provincias/{provincia}', [ProvinciaController::class, 'show']);
Route::get('/provincias/{provincia}/cantones', [ProvinciaController::class, 'cantones']);

// RUTAS CANTONES => FUNCIONAN
Route::get('/cantones', [CantonController::class, 'index']);
Route::get('/cantones/{canton}', [CantonController::class, 'show']);
Route::get('/cantones/{canton}/parroquias', [CantonController::class, 'parroquias']);

// RUTAS PARROQUIAS => FUNCIONAN
Route::get('/parroquias', [ParroquiaController::class, 'index']);
Route::get('/parroquias/{parroquia}', [ParroquiaController::class, 'show']);

// RUTA PARA OBTENER USUARIOS DE CENTRO DE ACOPIO
Route::get('/users', [UserController::class, 'indexCollectionCenters']);

Route::group(['middleware' => ['jwt.verify']], function () {
    //OBTENER INFORMACION DEL USUARIO CON LA SESION ACTIVA
    Route::get('/user', [UserController::class, 'getAuthenticatedUser']);
    // VER ENTREGAS => funciona
    Route::get('deliveries', [DeliveryController::class, 'index']);
    // CREAR ENTREGAS => funciona
    Route::post('deliveries', [DeliveryController::class, 'store']);
    // MOSTRAR UNA ENTREGA => funciona
    Route::get('deliveries/{delivery}', [DeliveryController::class, 'show']);
    // ACTUALIZAR ENTREGA POR FINCA => pendiente revisar
    Route::put('deliveries/{delivery}', [DeliveryController::class, 'updateByFarm']);
    // ACTUALIZAR ENTREGA POR ACOPIO => funciona
    Route::put('deliveries/{delivery}', [DeliveryController::class, 'updateByCollectionCenter']);
    // LOGOUT

    Route::post('/logout', [UserController::class, 'logout']);


    // pendiente de revisar

    Route::get('/users/{user}', [UserController::class, 'show']);
    Route::put('/users/{user}', [UserController::class, 'update']);
    Route::get('users/{user}/image', [UserController::class, 'image']);
    Route::get('deliveries/{delivery}/image', [DeliveryController::class, 'image']);
});






