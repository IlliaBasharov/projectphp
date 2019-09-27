<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class CityController extends Controller
{
    public function index()
    {
        return view('city');
    }

    public function about()
    {
        return view('about');
    }

    public function show()
    {
        return view('cityById');
    }
}
