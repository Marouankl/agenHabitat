<?php

use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\LoginController;
use Doctrine\DBAL\Schema\View;
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
//Route::get('/','App\Http\Controllers\Controller@welcomes')->name('welcome.welcomes'); la route de base de laravel

// Une route unique pour l'index , qui sera, dans tous les cas, la page de connexion
    //  Même si tu es Admin ou Inspecteur ou Super Admin
Route::get('/', [CustomLoginController::class, 'login'])->name('login');
// La route qui check tous (vraiment tous) les logins, met l'utilisateur en session si reconnu depuis la bdd ou la session en cours
Route::post('/checkLogin', [CustomLoginController::class, 'checkLogin'])
    ->name('check')
    ->middleware('auth.custom');

// Route pour la redirection des Inspecteurs
// Route::get('/inspecteur', [InspecteurController::class, 'index'])
    //->name('inspecteur.index')
    //->middleware('auth.custom');



// Route pour la redirection des Administratifs (return)
Route::get("/administratif", [App\Http\Controllers\AdministratifController::class, 'index'])->name('administrateur.index');

Route::controller(LoginController::class)->group(function (){
    Route::get('/login/administratif','login')->name('administratif.login.login');
    Route::post('/login/administratif','ValiderLogin')->name('administratif.index.ValiderLogin');
});



