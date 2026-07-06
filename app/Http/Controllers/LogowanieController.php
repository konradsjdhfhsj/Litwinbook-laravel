<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class LogowanieController extends Controller
{
    public function logowanie(Request $request)
    {
        $logowanie = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $logowanie['email'], 'password' => $logowanie['password']])) {
            $request->session()->regenerate();
            return redirect('/glowna'); 
        }

        return back()->withErrors([
            'email' => 'Błędny email lub hasło.',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
