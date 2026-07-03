<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posty;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DodajpostController extends Controller
{
    public function dodajpost(Request $request)
    {
        $validated = $request->validate([
            'tresc' => 'nullable|string|max:255|required_without:zdjecie',
            'zdjecie' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|required_without:tresc',
        ]);

        $path = null;

        if ($request->hasFile('zdjecie')) {
            $filename = $request->file('zdjecie')->store('posts', 'public');
            $path = 'storage/' . $filename;
        }

        Posty::create([
            'tresc' => $validated['tresc'] ?? null, 
            'autor' => Auth::user()->email,
            'data'  => now(),
            'zdjecie' => $path 
        ]);

        return redirect('/glowna')->with('success', 'Post został dodany!');
    }
}
