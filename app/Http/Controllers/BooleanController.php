<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class BooleanController extends Controller
{
  public function index()
  {
    // $students = config('students');
    $students = Student::all();
    return view('boolean.index', compact('students'));
  }
  public function getStudentByName($slug)
  {
    // $students = config('students');
    $students = Student::all();
    foreach($students as $student) {
      if ($student['slug'] == $slug) $this_student[] = $student;
    }
    $students = $this_student;
    return view('boolean.index', compact('students'));
  }
  public function postStudentByAge(Request $request)
  {
    $response = $request->all();
    // $students = config('students');
    $students = Student::all();
    foreach($students as $student) {
      if($response['age']=='under_30') {
        if ( $student['age'] < 30) $selected_students[] = $student;
      }
      if($response['age']=='between_30_50') {
        if ( $student['age'] >= 30 && $student['age'] <= 50) $selected_students[] = $student;
      }
      if($response['age']=='over_50') {
        if ( $student['age'] > 50) $selected_students[] = $student;
      }
      if($response['age']=='all') {
        $selected_students[] = $students;
      }
    }
    $students = $selected_students;
    return $students;
  }
}
