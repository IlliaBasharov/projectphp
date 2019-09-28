<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function index()
    {
        $cities = DB::table('cities')->paginate(10);
        return view('city', ['cities' => $cities]);
    }

    public function about()
    {
        return view('about');
    }
}
