<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentsController extends Controller
{
    public function index(Request $request)
    {
        $students = Students::all();
        //dd($students);
        return view('students', compact('students'));
    }
}
