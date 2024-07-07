<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuesionerController extends Controller
{
    function index()
    {
        return view('alumni.tracerstudy.kuesioner.index');
    }
}
