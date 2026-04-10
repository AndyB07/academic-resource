<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
   
   
  public function getAllStudentsfuntion() {
    return view('student', ['data' => Student::all()]);
  }
  public function showUpdateStudent($id) {
    return view('update', ['data' => Student::find($id)]);
  }
  public function deleteStudent($id){
    $student = Student::findOrFail($id);
    $student->delete();

    return redirect('/');
  }
}