<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::query()->where('is_publish', '1')->get();
        return view('city', ['cities' => $cities]);
    }

    public function about()
    {
        return view('about');
    }
}
