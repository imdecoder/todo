<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Help extends Controller
{
    public function index()
    {
        return view('help');
    }
}
