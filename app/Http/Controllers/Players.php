<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Players extends Controller
{
    //
    public function create()
    {
        return view('form');
    }
}
