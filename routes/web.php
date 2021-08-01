<?php

use Illuminate\Support\Facades\Route;

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

#Resourse route for student
Route::resource("students", "\App\Http\Controllers\Student\StudentController");

#Resourse route for student marks
Route::resource(
    "student/marks",
    "\App\Http\Controllers\Student\StudentMarkController"
);

Route::get("/", function () {
    return redirect("/students");
});
