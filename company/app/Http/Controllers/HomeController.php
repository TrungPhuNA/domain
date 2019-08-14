<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getView()
    {
        return view('company');
    }

    public function getJob()
    {
        return view('job');
    }

    public function getTest()
    {
        return view('test');
    }
}
