<?php

namespace App\Http\Controllers;

use App\Models\heros;
use Illuminate\Http\Request;

class HerosController extends Controller
{
    //
    public function index (){
        $heros = heros::all();
        return view ('view', compact('heros'));
    }
}
