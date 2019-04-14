<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientsMetricsController extends Controller
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
			'message' => 'A list of patient metrics metrics'
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
			'message' => 'Displaying a create a new patient metrics form'
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
			'message' => 'Saving the create a new patient metrics form'
		];
		return view('myproject', compact('parms'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $patientId
	 * @param  string  $metricId
	 * @return \Illuminate\Http\Response
	 */
	public function show($patientId, $metricId)
	{
		$parms = [
			'message' => 'Displaying the individual patient #'.$patientId.' and metric #'.$metricId
		];
		return view('myproject', compact('parms'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $patientId
	 * @param  string  $metricId
	 * @return \Illuminate\Http\Response
	 */
	public function edit($patientId, $metricId)
	{
		$parms = [
			'message' => 'Displaying edit the existing patient #'.$patientId.' and metric #'.$metricId
		];
		return view('myproject', compact('parms'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $patientId
	 * @param  string  $metricId
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $patientId, $metricId)
	{
		$parms = [
			'message' => 'Updating edit the existing patient #'.$patientId.' and metric #'.$metricId
		];
		return view('myproject', compact('parms'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $patientId
	 * @param  string  $metricId
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($patientId, $metricId)
	{
		$parms = [
			'message' => 'Deleting the existing patient metrics #'.$patientId.' and metric #'.$metricId
		];
		return view('myproject', compact('parms'));
	}
}
