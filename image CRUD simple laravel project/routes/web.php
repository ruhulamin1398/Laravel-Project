<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
use Illuminate\Support\Facades\Storage;
Route::get('/a', function () {
   if( Storage:delete('public/a.txt'))
   {
       return success ;
   }
   else {
       
    return failed;
   }
    
});
