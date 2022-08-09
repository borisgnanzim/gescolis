<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\GestionnaireController;
use App\Http\Controllers\PaquetController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// mes routes
//
// Route Client
Route::get('clients',[ClientController::class,'getClient']);

Route::get('client/{id}',[ClientController::class,'getClientById']);

Route::post('addClient',[ClientController::class,'addClient']);

Route::put('updateClient/{id}',[ClientController::class,'updateClient']);

Route::delete('deleteClient/{id}',[ClientController::class,'deleteClient']);
// route get client by name
Route::get('clientByName/{nom_client}',[ClientController::class,'getClientByName']);

//
// Route Gestionnaire 
Route::get('gestionnaires',[GestionnaireController::class,'getGestionnaire']);

Route::get('gestionnaire/{id}',[GestionnaireController::class,'getGestionnaireById']);

Route::post('addGestionnaire',[GestionnaireController::class,'addGestionnaire']);

Route::put('updateGestionnaire/{id}',[GestionnaireController::class,'updateGestionnaire']);

Route::delete('deleteGestionnaire/{id}',[GestionnaireController::class,'deleteGestionnaire']);
//
// Route Colis
Route::get('colis',[ColisController::class,'getColis']);

Route::get('colis/{id}',[ColisController::class,'getColisById']);

Route::post('addColis',[ColisController::class,'addColis']);

Route::put('updateColis/{id}',[ColisController::class,'updateColis']);

Route::delete('deleteColis/{id}',[ColisController::class,'deleteClient']);

//

// Route Paquet
Route::get('paquets',[PaquetController::class,'getPaquet']);

Route::get('paquet/{id}',[PaquetController::class,'getPaquetById']);

Route::post('addPaquet',[PaquetController::class,'addPaquet']);

Route::put('updatePaquet/{id}',[PaquetController::class,'updatePaquet']);

Route::delete('deletePaquet/{id}',[PaquetController::class,'deletePaquet']);
//
//
use App\Http\Controllers\API\AuthController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
 
Route::middleware('auth:api')->group(function () {
    Route::get('get-user', [AuthController::class, 'userInfo']);
});


//
//use Illuminate\Support\Facades\DB;
// Route::middleware('auth:api')->get('/token/revoke', function (Request $request) {
//     DB::table('oauth_access_tokens')
//         ->where('user_id', $request->user()->id)
//         ->update([
//             'revoked' => true
//         ]);
//     return response()->json('DONE');
// });
