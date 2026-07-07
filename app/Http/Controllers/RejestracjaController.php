<?php

namespace App\Http\Controllers;

use App\Mail\Mailpowitalny;
use App\Models\Osoby; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Exception;

class RejestracjaController extends Controller
{
    public function rejestracja(Request $request)
    {
        $dane = $request->validate([
            'imie' => 'required|string|max:255',
            'nazwisko' => 'required|string|max:255',
            'wiek' => 'required|integer|min:0|max:150', 
            'email' => 'required|string|email|max:255|unique:osoby,email',
            'password' => 'required|string|min:8|max:255',
        ]);

        $osoba = Osoby::create([
            'imie' => $dane['imie'],
            'nazwisko' => $dane['nazwisko'],
            'wiek' => $dane['wiek'],
            'email' => $dane['email'],
            'password' => Hash::make($dane['password']), 
            'ip_utwozenia_konta' => $request->ip(), 
            'avatar' => 'storage/dus.png',    
        ]);

try {
    Mail::to($osoba->email)->send(new Mailpowitalny());
    dd('wysłano');
} catch (\Throwable $e) {
    dd($e->getMessage());
}
        return redirect('/')->with('sukces', 'Konto zostało utworzone pomyślnie!');
    }
}
