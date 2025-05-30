<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfesseurController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
Route::get('/professeur', [ProfesseurController::class,'index'])->name('Etudiant.index');
Route::get('/professeur/create', [ProfesseurController::class,'create'])->name('Etudiant.create');