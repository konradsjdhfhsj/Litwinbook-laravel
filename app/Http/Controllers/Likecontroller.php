<?php

namespace App\Http\Controllers;

use App\Models\Posty;
use Illuminate\Http\Request;

class Likecontroller extends Controller
{
public function like(Request $request)
{
    $data = $request->validate([
        'id' => 'required|integer|exists:posty,id' 
    ]);
    Posty::where('id', $data['id'])->increment('like');
    return redirect('/glowna');
}

}
