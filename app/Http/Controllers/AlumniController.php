<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumniController extends Controller
{
    function alumni()
    {
        return view('alumni.dashboard');
    }
}
