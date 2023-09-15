<?php

use Illuminate\Http\Request;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentails: false');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

Route::post('/v1/login', 'APIControllers\AuthController@login');
Route::post('/v1/signup',['as'=>'signup','uses'=>'APIControllers\AuthController@signup']);

/*Route::group(['middleware' => 'auth:api'], function() {*/
//Today Leads
Route::get('/v1/loginUser', ['as' => 'loginUser', 'uses' => 'APIControllers\TicketController@loginUser']);
Route::get('/v1/getBookingRefInfo', ['as' => 'getBookingRefInfo', 'uses' => 'APIControllers\TicketController@getBookingRefInfo']);
Route::get('/v1/getScannedReport', ['as' => 'getScannedReport', 'uses' => 'APIControllers\TicketController@getScannedReport']);
Route::post('/v1/updateBookingRefInfo', ['as' => 'updateBookingRefInfo', 'uses' => 'APIControllers\TicketController@updateBookingRefInfo']); 
Route::post('/v1/updateBookingDataToOnline', ['as' => 'updateBookingDataToOnline', 'uses' => 'APIControllers\TicketController@updateBookingDataToOnline']);    
// Route::post('/v1/updateBookingDataToOnline', ['as' => 'updateBookingDataToOnline', 'uses' => 'APIControllers\TicketController@updateBookingDataToOnline']); 