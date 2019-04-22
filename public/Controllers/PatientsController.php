<?php

namespace Myproject;

class PatientsController
{
	/**
	 * Display a listing of the resource.
	 *
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
	 */
	public function update($patientId)
	{
		$parms = [
			'message' => 'Updating edit the existing patient #'.$patientId.' form'
		];
		return view('myproject', compact('parms'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 */
	public function destroy($patientId)
	{
		$parms = [
			'message' => 'Deleting the existing patient #'.$patientId.' form'
		];
		return view('myproject', compact('parms'));
	}
}
