<?php

namespace App\Http\Controllers;

use App\Models\Posty;
use Illuminate\Http\Request;

class WyswietlpostController extends Controller
{
    public function WyswietlpostController(Request $request){
        $posty = Posty::all();
        return redirect('/posty', compact('posty'));
    }
}
