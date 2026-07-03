<?php

use App\Http\Controllers\Aktualizacjaprofilu;
use App\Http\Controllers\GlownaController;
use App\Http\Controllers\LogowanieController;
use App\Http\Controllers\RejestracjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('weryfikacja');
});
Route::post('/logowanie', [LogowanieController::class, 'Logowanie']);
Route::get('/rejestracja', [RejestracjaController::class, 'rejestracja']);
Route::post('/rejestracja', [RejestracjaController::class, 'rejestracja']);
Route::get('/glowna', [GlownaController::class, 'glowna']);
Route::post('/aktualizacja_profilu', [Aktualizacjaprofilu::class, 'aktprofil']);
