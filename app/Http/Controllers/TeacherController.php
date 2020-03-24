<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    // Return the teachers view with the teachers database table
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', [
            'teachers' => $teachers
        ]);
    }

}
