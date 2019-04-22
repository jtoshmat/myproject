<?php

namespace Myproject;

class PatientsMetricsController
{
	/**
	 * Display a listing of the resource.
	 */
	public function index($patientId)
	{
		$parms = [
			'id' => null,
			'message' => 'A list of patient metrics metrics'
		];
		return view('myproject', compact('parms'));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create($patientId)
	{
		$parms = [
			'message' => 'Displaying a create a new patient metrics form'
		];
		return view('myproject', compact('parms'));
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store($patientId)
	{
		$parms = [
			'message' => 'Saving the create a new patient metrics form'
		];
		return view('myproject', compact('parms'));
	}

	/**
	 * Display the specified resource.
	 *
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
	 */
	public function update($patientId, $metricId)
	{
		$parms = [
			'message' => 'Updating edit the existing patient #'.$patientId.' and metric #'.$metricId
		];
		return view('myproject', compact('parms'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 */
	public function destroy($patientId, $metricId)
	{
		$parms = [
			'message' => 'Deleting the existing patient metrics #'.$patientId.' and metric #'.$metricId
		];
		return view('myproject', compact('parms'));
	}
}
