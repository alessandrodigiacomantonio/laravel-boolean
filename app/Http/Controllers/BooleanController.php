<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooleanController extends Controller
{
  public function index()
  {
    $students = config('students');
    return view('boolean.index', compact('students'));
  }
  public function getStudentFromName($slug)
  {
    $students = config('students');
    foreach($students as $student) {
      if ($student['slug'] == $slug) $this_student[] = $student;
    }
    $students = $this_student;
    return view('boolean.index', compact('students'));
  }
}
