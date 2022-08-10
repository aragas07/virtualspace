<?php

namespace App\Http\Controllers;

use App\Models\IncomingStudent;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$incoming_students = IncomingStudent::all();

        $incoming_students = DB::table('incoming_students')
        ->select('*')
        ->paginate(5);

        // $students = DB::table('students')
        // ->select('students.oid as id', 'school_id', 'first_name', 'middle_name', 'last_name', 'courses.acronyms as acronyms', 'student_status', 'application_status')
        // ->join('courses as courses', 'incoming_students.course_first_choice', '=', 'courses.id', 'left')
        // ->orderBy('id', 'DESC')
        // ->paginate(5);
        return view('students.index', [
            'incoming_students' => $incoming_students,'students' => $incoming_students
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        
        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
