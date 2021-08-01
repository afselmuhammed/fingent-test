<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentMarkRequest;
use App\Models\Student;
use App\Models\StudentMark;
use Illuminate\Database\QueryException;

class StudentMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marks = StudentMark::with("student")->get();

        return view("mark.list", compact("marks"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();

        return view("mark.create", compact("students"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentMarkRequest $request)
    {
        StudentMark::create([
            "student_id" => $request["student_id"],
            "term" => $request["term"],
            "maths" => $request["maths"],
            "science" => $request["science"],
            "history" => $request["history"],
        ]);

        return redirect()
            ->intended("/student/marks")
            ->with("store_message", "New Mark List Created Successfully !");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mark = StudentMark::find($id);
        $students = Student::all();

        if ($mark == null) {
            return redirect()->intended("/student/marks");
        }

        return view("mark.edit", compact("mark", "students"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentMarkRequest $request, $id)
    {
        $mark = StudentMark::findOrfail($id);

        $mark->update([
            "student_id" => $request["student_id"],
            "term" => $request["term"],
            "maths" => $request["maths"],
            "science" => $request["science"],
            "history" => $request["history"],
        ]);

        return redirect()
            ->intended("/student/marks")
            ->with("store_message", "Edit Mark List Successfully !");
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
            StudentMark::where("id", $id)->delete();

            return redirect()
                ->intended("student/marks")
                ->with("delete_message", "Item Deleted Successfully !");
        } catch (QueryException $ex) {
            return redirect()
                ->intended("/student/marks")
                ->with("delete_message", "Cannot Delete this Mark List!");
        }
        
    }
}
