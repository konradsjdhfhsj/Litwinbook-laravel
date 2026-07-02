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
        $posty = Posty::all();
        return view('glowna', compact('posty', 'profile'));
    }
    
}
