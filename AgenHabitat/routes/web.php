<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/','App\Http\Controllers\Controller@welcomes')->name('welcome.welcomes');
Route::resource("/administratif",App\Http\Controllers\AdministratifController::class);
Route::get('/administratif/show/{NumInspection}','App\Http\Controllers\AdministratifController@show')->name('administratif.show');
Route::get('/administratif/edit/{NumInspection}','App\Http\Controllers\AdministratifController@edit')->name('administratif.edit');
Route::get('/administratif/delete/{NumInspection}/delete','App\Http\Controllers\AdministratifController@destroy')->name('administratif.delete');
Route::post('/administratif','App\Http\Controllers\AdministratifController@update')->name('administratif.update');

Route::controller(LoginController::class)->group(function (){
    Route::get('/login/administratif','login')->name('administratif.login.login');
    Route::post('/login/administratif','ValiderLogin')->name('administratif.index.ValiderLogin');
});
