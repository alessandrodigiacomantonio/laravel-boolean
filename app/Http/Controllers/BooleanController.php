<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooleanController extends Controller
{
  public function index()
  {
    $students = [
      [],
      [],
      [],
      [],
    ];
    return view('boolean.index', compact('students'));
  }
}
