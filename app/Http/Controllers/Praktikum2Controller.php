<?php

namespace App\Http\Controllers;

use App\Models\praktikum2;
use Illuminate\Http\Request;

class Praktikum2Controller extends Controller
{
    public function index(){
        $praktikum2 = praktikum2::all();
        return view('welcome', compact('praktikum2'));
    }
}
