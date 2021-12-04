<?php

use Illuminate\Http\Request;
use App\Http\Controllers\testAPI;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


//APII
Route::get("data",[testAPI::class,'getData']);
Route::post("senddata",[testAPI::class,'sendData']);
Route::put("updateData",[testAPI::class,'update']);
Route::get("searchData/{name}",[testAPI::class,'search']);
