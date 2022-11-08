<?php

use App\Http\Controllers\AdressController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\authDriver\DriverLogin;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\TruckOrderController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group([

    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('verifyCode', 'AuthController@verifyCode');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::get('allusers',[AuthController::class,'index']);
    Route::get('show/{id}',[AuthController::class,'show']);
    Route::post('store',[AuthController::class,'store']);
    Route::post('update/{id}',[AuthController::class,'update']);




});
Route::get('index',[ProductController::class,'index']);
Route::post('search',[ProductController::class,'search']);
Route::post('forgetpassword',[AuthController::class,'forgetpassword']);
Route::post('newpassword',[AuthController::class,'newpassword']);
Route::get('country',[UserController::class,'listRegister']);
Route::post('Registero',[AuthController::class,'Registero']);
Route::post('updateregister',[AuthController::class,'updateregister']);
Route::get('listRegister',[AuthController::class,'listRegister']);

Route::post('Register',[AuthController::class,'Register']);

Route::post('updateprofile',[AuthController::class,'updateprofile']);
//////الجدول الكبير بتاع طلب الشحنة ///
Route::post('truckorder',[TruckOrderController::class,'saveTruckOrder']);

Route::post('sender',[TruckOrderController::class,'elwarda']);
Route::post('reciever',[TruckOrderController::class,'elsadra']);
Route::get('country',[CountryController::class,'index']);

Route::post('adress',[AdressController::class,'store']);
Route::delete('adress/{id}',[AdressController::class,'destroy']);
Route::get('showadress',[AdressController::class,'index']);
/////////////////rates/////////////////////
Route::get('rates',[RateController::class,'index']);

Route::post('gorates',[RateController::class,'rate']);


//////////////////guarddriver///////////////////


Route::post('driverlogin',[DriverLogin::class,'driverlogin']);
Route::post('driverforgetpassword',[DriverLogin::class,'driverforgetpassword']);
Route::post('driverNewPassword',[DriverLogin::class,'driverNewPassword']);
Route::post('driverRegister',[DriverLogin::class,'driverRegister']);
Route::post('updateTruk',[DriverLogin::class,'updateTruk']);





































