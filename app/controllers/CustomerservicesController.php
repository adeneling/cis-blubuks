<?php

class CustomerservicesController extends \BaseController {

	/**
	 * Display a listing of customerservices
	 *
	 * @return Response
	 */
	public function index()
	{
		$customerservices = Customerservice::all();

		return View::make('customerservices.index', compact('customerservices'));
	}

	/**
	 * Show the form for creating a new customerservice
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('customerservices.create');
	}

	/**
	 * Store a newly created customerservice in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Customerservice::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Customerservice::create($data);

		return Redirect::route('customerservices.index');
	}

	/**
	 * Display the specified customerservice.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$customerservice = Customerservice::findOrFail($id);

		return View::make('customerservices.show', compact('customerservice'));
	}

	/**
	 * Show the form for editing the specified customerservice.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$customerservice = Customerservice::find($id);

		return View::make('customerservices.edit', compact('customerservice'));
	}

	/**
	 * Update the specified customerservice in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$customerservice = Customerservice::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Customerservice::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$customerservice->update($data);

		return Redirect::route('customerservices.index');
	}

	/**
	 * Remove the specified customerservice from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Customerservice::destroy($id);

		return Redirect::route('customerservices.index');
	}

}
