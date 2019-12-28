<?php

use App\Http\Controllers\DonorController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("donor-list","DonorController@donerapi");
Route::get("donors/division","DonorController@division");
Route::get("donors/district","DonorController@district");
Route::get("donors/upazila","DonorController@upazila");
Route::get("donors/union","DonorController@union");
