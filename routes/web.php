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
Route::post('/professeur', [ProfesseurController::class,'store'])->name('Etudiant.store');
Route::delete('professeur/delete/{etudiant}',[ProfesseurController::class,'delete'])->name('Etudiant.delete');
Route::get('professeur/edit/{etudiant}',[ProfesseurController::class,'edit'])->name('Etudiant.edit');
Route::post('professeur/edit/{etudiant}',[ProfesseurController::class,'update'])->name('Etudiant.update');
