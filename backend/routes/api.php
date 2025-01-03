<?php

// routes/api.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get('/jobs', [JobController::class, 'index']); // Liste paginée des offres
Route::get('/jobs/{id}', [JobController::class, 'show']); // Affiche une offre spécifique
Route::post('/jobs', [JobController::class, 'store']); // Crée une nouvelle offre
Route::put('/jobs/{id}', [JobController::class, 'update']); // Met à jour une offre existante
Route::delete('/jobs/{id}', [JobController::class, 'destroy']); // Supprime une offre

