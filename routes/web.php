<?php

use App\Models\Student;
use App\Http\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::middleware(['auth'])->group(function () {
    Route::get('/',[StudentsController::class, 'getAllStudentsfuntion']);


Route::post('/students', function (Request $request) {

    $validated = $request->validate([
        'last_name' => 'required',
        'first_name' => 'required',
        'dob' => 'required|date',
    ]);

    Student::create($validated);

    return redirect('/');
});
Route::get('/students/{id}/edit', [StudentsController::class, 'showUpdateStudent']);


Route::put('/students/{id}', function (Request $request, $id) {
    $student = Student::find($id);

    $student->update([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'dob' => $request->dob,
    ]);

    return redirect('/');
});

Route::delete('/students/{id}',[StudentsController::class, 'deleteStudent']);

Route::get('/addStudents', function () {
    return view('addStudents');
});

});


Route::get('/registration', function () {
    return view('registration');
});
Route::get('/login', function () {
    
    return view('login');
});

Route::post('/registration', [App\Http\Controllers\userAuthentication::class, 'authentication']);

Route::post('/login', [App\Http\Controllers\userAuthentication::class, 'login'])->name('login');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
});
