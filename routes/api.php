<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\deviceController;
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

Route::get("list/{id?}",[deviceController::class, 'list']);

Route::post('add',[deviceController::class,'add']);
Route::put('update',[deviceController::class,'update']);
Route::delete('delete/{id}',[deviceController::class, 'delete']);
Route::get('search/{name}',[deviceController::class, 'search']);