<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreativController extends Controller
{
    public function index()
    {
        return view('Creativ/index');
    }
}
