<?php

namespace App\Http\Controllers;

use App\Models\Posty;
use Illuminate\Routing\Controller;

class WyswietlpostController extends Controller
{
    public function wyswietlpost(){
        $posty = Posty::all();
        return view('glowna', compact('posty'));
    }
}
