<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with("teacher")->get();
        return view("student.list", compact("students"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view("student.create", compact("teachers"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        Student::create([
            "name" => $request["name"],
            "age" => $request["age"],
            "gender" => $request["gender"],
            "teacher_id" => $request["teacher_id"],
        ]);

        return redirect()
            ->intended("/students")
            ->with("store_message", "New Student Created Successfully !");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $teachers = Teacher::all();

        if ($student == null) {
            return redirect()->intended("/students");
        }

        return view("student.edit", compact("student", "teachers"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $student = Student::findOrfail($id);

        $student->update([
            "name" => $request["name"],
            "age" => $request["age"],
            "gender" => $request["gender"],
            "teacher_id" => $request["teacher_id"],
        ]);

        return redirect()
            ->intended("/students")
            ->with("store_message", "Edit Student Data Successfully !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Student::where("id", $id)->delete();

            return redirect()
                ->intended("/students")
                ->with("delete_message", "Item Deleted Successfully !");
        } catch (QueryException $ex) {
            return redirect()
                ->intended("/students")
                ->with("delete_message", "Cannot delete this student!");
        }
    }
}
