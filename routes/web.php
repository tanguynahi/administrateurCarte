<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\AdministrateurController;

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

require __DIR__.'/auth.php';
Route::controller(ConnexionController::class)->group(function(){
    Route::get('/','pageConnexion')->name('pageConnexion');
    Route::post('/storeControllerCOnnexion','connexionAdministrateur')->name('connexion.administrateur');
});

Route::controller(VitrineController::class)->group(function(){
    Route::get('/informationsPersonnel/{id}','qrcodeView')->name('qrcodeviews');
});

Route::middleware('auth')->group(function () {
    Route::controller(AdministrateurController::class)->group(function(){
        Route::get('/tableau-de-bord','index')->middleware('verified')->name('dashboard');
        // listes des personnels
        Route::get('/listes-des-personnels','listePersonnel')->name('personnels.index');
        Route::get('/page-ajout-personnel','create')->name('personnels.create');
        Route::post('/storePersonnel','store')->name('personnels.store');
        Route::get('/detail-personnelBMI/{id}','show')->name('personnels.show');
        Route::post('/desactive-personnel/{id}','desactive')->name('personnel.desactive');
        Route::get('/reactivation-personnel/{id}','reactive')->name('restauration');

        // profils d'utilisateur
        Route::get('/pagedeProfil','profileUser')->name('utisateurProfil');
        Route::post('/updateInfosPersonnel','miseAjourInfos')->name('updateInfos');
        Route::post('/modifierMotdePasse','modifierAcces')->name('passwordNom');

    });
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


