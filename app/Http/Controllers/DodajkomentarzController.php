<?php

namespace App\Http\Controllers;

use App\Models\Posty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DodajkomentarzController extends Controller
{
    public function dodaj(Request $request){
        $komentarz = $request->validate([
            'tresc' => 'nullable|string|max:255',
            'id_post' => 'nullable|string|max:255',
            'zdjecie' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048|required_without:tresc',
        ]);

        $path = null;

        if ($request->hasFile('zdjecie')) {
            $filename = $request->file('zdjecie')->store('posts', 'public');
            $path = 'storage/' . $filename;
        }

        $wstaw = Posty::create([
            'altor_komentarza' => Auth::user()->email,
            'komentarz' => $komentarz['tresc'],
            'zdjecie' => $path,
            'post_id' => $komentarz['id_post']
        ]);
        return redirect('/glowna');
    }
}
