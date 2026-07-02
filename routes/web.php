<?php

use App\Http\Controllers\LogowanieController;
use App\Http\Controllers\RejestracjaController;
use App\Http\Controllers\WyswietlpostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('weryfikacja');
});
Route::post('/logowanie', [LogowanieController::class, 'Logowanie']);
Route::get('/rejestracja', [RejestracjaController::class, 'rejestracja']);
Route::post('/rejestracja', [RejestracjaController::class, 'rejestracja']);
Route::get('/glowna', [WyswietlpostController::class, 'wyswietlpost']);