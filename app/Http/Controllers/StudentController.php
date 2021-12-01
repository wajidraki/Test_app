<?php

namespace App\Http\Controllers;

use App\Models\level;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Instituation;
use Illuminate\Database\Eloquent\Model;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::with('Level','Instituation')->get();



        //FOR DROP DOROWN
        $levels = Level::all();
        $instituaions = Instituation::all();


        return view('student.student', compact('students','levels','instituaions'));

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
        $students = new Student();
        $students->name = $request->stu_name;
        $students->father_name = $request->father_name;
        $students->contact = $request->contact;
        $students->instituation_id = $request->Instituation;
        $students->level_id = $request->level;
        $students->save();
        return back();
    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::findOrFail($id);
        return view('student.details',compact('students'));

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.update',compact( 'student'));
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
        $students = Student::findOrFail($id);
        $students->name = $request->stu_name;
        $students->father_name = $request->father_name;
        $students->contact = $request->contact;
        //        $students->instituation_id = $request->Instituation;
        //        $students->level_id = $request->level;
        $students->save();
        return back();

    }

    public function save(Request $request,$id){

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::findOrFail($id);
       $students->delete();
       return back();
    }
}
