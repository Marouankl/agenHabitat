<?php

use App\Http\Controllers\CustomLoginController;
use App\Http\Controllers\InspecteurController;
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
Route::post('/checkLogin', [CustomLoginController::class, 'checkLogin'])->name('check');

// Route pour la redirection des Inspecteurs vers leur menu
Route::get('/inspecteur', [InspecteurController::class, 'index'])
    ->name('inspecteur.index')
    ->middleware('auth.custom');

// Routes des boutons du menu Inspecteur
// toutes ces routes vont être sujet à vérification d'identifiants en session 
Route::controller(InspecteurController::class)->middleware(['auth.custom'])->group(function(){
    Route::any('/inspecteur/inspection', 'newInspection')->name('inspecteur.form');
    Route::post('/inspecteur/inspection/send', 'checkAddInspection')->name('inspecteur.checkAddInspection');
    Route::post('/inspecteur/inspection/mod', 'checkModInspection')->name('inspecteur.checkModInspection');
    Route::get('/inspecteur/calendrier', 'planifier')->name('inspecteur.planifie');
}); 



// Route pour la redirection des Administratifs
Route::get("/administratif", [App\Http\Controllers\AdministratifController::class, 'index'])->name('administrateur.index');

Route::controller(LoginController::class)->group(function (){
    Route::get('/login/administratif','login')->name('administratif.login.login');
    Route::post('/login/administratif','ValiderLogin')->name('administratif.index.ValiderLogin');
});



