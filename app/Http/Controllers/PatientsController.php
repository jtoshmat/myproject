<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$parms = [
    		'id' => null,
		    'message' => 'A list of patients'
	    ];
        return view('myproject', compact('parms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    $parms = [
		    'message' => 'Displaying a create a new patient form'
	    ];
	    return view('myproject', compact('parms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    $parms = [
		    'message' => 'Saving the create a new patient form'
	    ];
	    return view('myproject', compact('parms'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $patientId
     * @return \Illuminate\Http\Response
     */
    public function show($patientId)
    {
	    $parms = [
		    'message' => 'Displaying the individual patient #'.$patientId
	    ];
	    return view('myproject', compact('parms'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $patientId
     * @return \Illuminate\Http\Response
     */
    public function edit($patientId)
    {
	    $parms = [
		    'message' => 'Displaying edit the existing patient #'.$patientId.' form'
	    ];
	    return view('myproject', compact('parms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $patientId
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $patientId)
    {
	    $parms = [
		    'message' => 'Updating edit the existing patient #'.$patientId.' form'
	    ];
	    return view('myproject', compact('parms'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $patientId
     * @return \Illuminate\Http\Response
     */
    public function destroy($patientId)
    {
	    $parms = [
		    'message' => 'Deleting the existing patient #'.$patientId.' form'
	    ];
	    return view('myproject', compact('parms'));
    }
}
