<?php

use App\Http\Controllers\Aktualizacjaprofilu;
use App\Http\Controllers\DodajkomentarzController;
use App\Http\Controllers\DodajpostController;
use App\Http\Controllers\GlownaController;
use App\Http\Controllers\Likecontroller;
use App\Http\Controllers\LogowanieController;
use App\Http\Controllers\RejestracjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('weryfikacja');
});
Route::post('/logowanie', [LogowanieController::class, 'Logowanie']);
Route::post('/rejestracja', [RejestracjaController::class, 'rejestracja']);
Route::get('/glowna', [GlownaController::class, 'glowna']);
Route::post('/aktualizacja_profilu', [Aktualizacjaprofilu::class, 'aktprofil']);
Route::post('/dodawanie_postu', [DodajpostController::class, 'dodajpost']);
Route::delete('/usun/{id}', [DodajpostController::class, 'usun']);
Route::post('/dodaj_komentarz', [DodajkomentarzController::class, 'dodaj']);
Route::post('/logout',[LogowanieController::class, 'logout']);
Route::post('/like',[Likecontroller::class, 'like']);