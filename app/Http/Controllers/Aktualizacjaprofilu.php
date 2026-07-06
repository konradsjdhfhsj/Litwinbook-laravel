<?php

namespace App\Http\Controllers;

use App\Models\Osoby;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Aktualizacjaprofilu extends Controller
{
    public function aktprofil(Request $request)
    {
        $request->validate([
            'imie' => 'required|string|max:255',
            'nazwisko' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $profil = Auth::user();

        $profil->imie = $request->imie;
        $profil->nazwisko = $request->nazwisko;
        $profil->email = $request->email;

        if ($request->hasFile('avatar')) {
            
            if ($profil->avatar) {
                $oldPath = str_replace('storage/', '', $profil->avatar);
                if (Storage::disk('public')->exists($oldPath)) {
                    Storage::disk('public')->delete($oldPath);
                }
            }
            $filename = $request->file('avatar')->store('avatars', 'public');
            $profil->avatar = 'storage/' . $filename;
        }

        $profil->save();

        return redirect('/glowna');
    }
}
