<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\PostulantController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\EntrepriseController;
Route::get('/', function () {
    return view('home');
});
Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('dash-admin',[AdminController::class,'index'])->name('dash-admin');
Route::get('login',[AdminController::class,'login'])->name('login');
Route::post('register', [UserController::class, 'register'])->name('register');
Route::get('/Cv-depot', [CVController::class, 'depot'])->name('cv.depot');
Route::get('/register-p', [PostulantController::class, 'register'])->name('register-p');
Route::get('/login-p', [PostulantController::class, 'login'])->name('login-p');
Route::get('/offre', [OffreController::class, 'offre'])->name('offre');
Route::get('/register-e', [EntrepriseController::class, 'register'])->name('register-e');
Route::get('/login-e', [EntrepriseController::class, 'login'])->name('login-e');