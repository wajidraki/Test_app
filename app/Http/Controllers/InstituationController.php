<?php

namespace App\Http\Controllers;

use App\Models\Instituation;
use Illuminate\Http\Request;

class InstituationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituations = Instituation::all();
        return view('instituation.institationl',compact('instituations'));
    }

    public function indexo(){
        $instituations = Instituation::hasStudent()->get();
        $instit = Instituation::hasNoStudent()->get();
        return view('instituation.details',compact('instituations','instit'));
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
        $institations = new Instituation();
        $institations->name=$request->name;
        $institations->phone = $request->phone;
        $institations->address = $request->address;
        $institations->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instituation  $instituation
     * @return \Illuminate\Http\Response
     */
    public function show(Instituation $instituation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instituation  $instituation
     * @return \Illuminate\Http\Response
     */
    public function edit(Instituation $instituation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instituation  $instituation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instituation $instituation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instituation  $instituation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instituation $instituation)
    {
        //
    }
}
