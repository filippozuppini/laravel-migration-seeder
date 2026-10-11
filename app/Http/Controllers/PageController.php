<?php

namespace App\Http\Controllers;

use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();   // prende tutte le righe della tabella trains

        return view('home', compact('trains'));
    }
}
