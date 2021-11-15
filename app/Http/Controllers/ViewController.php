<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    function showPraktikum2()
    {
        return view('prak2');
    }
    function showETS()
    {
        return view('ETScode');
    }
    function showTugasPHP()
    {
        return view('showTugas');
    }
    function factorial(request $request)
    {
        return view('factorialCode');
    }
}
