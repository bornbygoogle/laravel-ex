<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KartingController extends Controller
{
    public function index()
    {
        return view('Karting/index');
    }
}
