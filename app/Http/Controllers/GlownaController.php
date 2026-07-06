<?php

namespace App\Http\Controllers;

use App\Models\Osoby;
use App\Models\Posty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GlownaController extends Controller
{
      public function glowna(){
        $profile = Auth::user();
        $posty = Posty::with('osoba')->latest('data')->get();
        return view('glowna', compact('posty', 'profile'));
    }
    public function komentarze(){
$posty = Posty::whereNull('post_id')->with('komentarze')->get();

return view('glowna', compact('posty'));
    }
    
}
