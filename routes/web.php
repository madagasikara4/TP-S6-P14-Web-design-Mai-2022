<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontController;
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

Route::middleware(['gzip'])->group(function(){
    Route::get('/', function () {
        return redirect()->route('front_liste');
    })->name("front_index");
    
    Route::get('/backoffice', [Controller::class, 'index'])->name("index");
    Route::post('/backoffice/login', [Controller::class, 'login'])->name("login");
    Route::get('/backoffice/ajout', [Controller::class, 'ajout'])->name("ajout");
    Route::post('/backoffice/create', [Controller::class, 'create'])->name("create");
    Route::get('/backoffice/liste', [Controller::class, 'liste'])->name("liste");
    
    Route::get('/backoffice/edit/{id}', [Controller::class, 'edit'])->name("edit");
    Route::post('/backoffice/modif', [Controller::class, 'modif'])->name("modif");
    Route::get('/backoffice/remove/{id}', [Controller::class, 'remove'])->name("remove");
    Route::get('/backoffice/fiche/{id}', [Controller::class, 'fiche'])->name("fiche");
    Route::post('/backoffice/recherche', [Controller::class, 'recherche'])->name("recherche");
    
    
    Route::get('/fiche/{id}', [FrontController::class, 'fiche'])->name("front_fiche");
    Route::get('/informations-sur-les-IA', [FrontController::class, 'liste'])->name("front_liste");
    Route::post('/recherche', [FrontController::class, 'recherche'])->name("front_recherche");
    Route::get('/{text}', [FrontController::class, 'rech'])->name("front_rech");
});