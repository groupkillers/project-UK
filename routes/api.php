<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmlController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register-user', [App\Http\Controllers\Auth\AuthController::class, 'register']);
Route::post('login-user', [App\Http\Controllers\Auth\AuthController::class, 'login']);



//AML Site Crud Functions Routes
Route::get('/aml',[AmlController::class,'ViewAml']); //View
Route::post('aml',[AmlController::class,'createAml']); //Insert
Route::put('aml/{id}',[AmlController::class,'updateAml']); //Update
Route::delete('aml/{id}',[AmlController::class,'deleteAml']); //Delete
Route::get('aml/{client_ID}',[AmlController::class,'searchAml']); //Search