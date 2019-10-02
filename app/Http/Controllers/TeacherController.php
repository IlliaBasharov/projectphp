<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher');
    }

    public function teacher($id)
    {
        $teachers = Teacher::findOfFail($id);
        return view('teacher', ['teacher' => $teachers]);
    }
}
