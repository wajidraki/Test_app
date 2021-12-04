<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class testAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getData()
    {
        $studnets = Student::all();
        return $studnets;
    }

    public function sendData(Request $request)
    {
//        return ["result"=>"save successfuly"];
        $students = new Student();
        $students->name = $request->stu_name;
        $students->father_name = $request->father_name;
        $students->contact = $request->contact;
        $students->instituation_id = $request->Instituation;
        $students->level_id = $request->level;
        $students->save();
    }
public function update(Request $request){
        $students = Student::findOrFail($request->id);
        $students->name = $request->stu_name;
        $students->father_name = $request->father_name;
        $students->contact = $request->contact;
        $students->instituation_id = $request->Instituation;
        $students->level_id = $request->level;
        $students->save();
}
public function search($name)
{
    return Student::where("name","like","%".$name."%")->get();
}
    public function index()
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        //
//    }

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
