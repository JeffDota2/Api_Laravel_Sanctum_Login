<?php
use App\Http\Controllers\AutenticarController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/registro', [AutenticarController::class,'registro']);
Route::post('/acceso', [AutenticarController::class,'acceso']);

Route::group(['middleware' =>['auth:sanctum']], function(){

    Route::post('/cerrarsesion', [AutenticarController::class,'cerrarSesion']);


});


