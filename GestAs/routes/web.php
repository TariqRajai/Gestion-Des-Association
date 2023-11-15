<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AssocController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\UtilisateurController;
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
Route::get('/accueil', function () {
    return view('accueil');
})->name('accueil');

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/register', function () {
    return view('register');
});

Route::post('/register',[UtilisateurController::class,'add'])->name('add');
Route::post('/login',[UtilisateurController::class,'store'])->name('store');

Route::post('/ajouter',[ActiviteController::class,'ajouter'])->name('ajouter');

Route::get('/activite', function () {
    return view('addact');
});
Route::get('/login',[UtilisateurController::class,'home'])->name('hh');
Route::get('/assoc',[AssocController::class,'index'])->name('assoc');
Route::get('/activite', function () {
    return view('activite');
})->name('activite');
Route::get('/statistique',[AssocController::class,'statistique'])->name('statistique');
Route::get('/fiche',[AssocController::class,'fiche'])->name('fiche');
Route::delete('/accueil',[UtilisateurController::class,'logout'])->name('logout');
Route::get('/assoc',[AssocController::class,'index'])->name('assoc');
Route::get('/save',[AssocController::class,'save'])->name('save');

Route::get('/assoc/word-export/{id}',[AssocController::class,'wordExport']);
