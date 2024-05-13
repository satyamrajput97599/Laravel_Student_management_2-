<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dbController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/checkAttendance', function () {
    return view('checkAttendance');
});


// Route::get('/class_subject', function () {
//     return view('class_subject');
// });


Route::get("/course", [DbController::class, "course"]);
Route::get("/deletecourse", [DbController::class, "deletecourse"]);
Route::get("/editcourse", [DbController::class, "editcourse"]);

Route::get("/subject", [DbController::class, "subject"]);
Route::get("/delete", [DbController::class, "deletesubject"]);
Route::get("/editsubject", [DbController::class, "editsubject"]);

Route::get("/class", [DbController::class, "class"]);
Route::get("/editclass", [DbController::class, "editclass"]);
Route::get("/deleteclass", [DbController::class, "deleteclass"]);

Route::get("/faculty", [DbController::class, "faculty"]);
Route::get("/deletefaculty", [DbController::class, "deletefaculty"]);
Route::get("/editfaculty", [DbController::class, "editfaculty"]);

Route::get("/student", [DbController::class, "student"]);
Route::get("/editstudent", [DbController::class, "editstudent"]);
Route::get("/deletestudent", [DbController::class, "deletestudent"]);

Route::get("/class_subject", [DbController::class, "classsubject"]);
Route::get("/delete_class_subject", [DbController::class, "delete_class_subject"]);
Route::get("/edit_class_subject", [DbController::class, "edit_class_subject"]);

Route::get("/checkAttendance", [DbController::class, "checkAttendance"]);


