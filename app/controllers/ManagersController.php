<?php

class ManagersController extends \BaseController {

	/**
	 * Display a listing of managers
	 *
	 * @return Response
	 */
	public function index()
	{
		$managers = Manager::all();

		return View::make('managers.index', compact('managers'));
	}

	/**
	 * Show the form for creating a new manager
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('managers.create');
	}

	/**
	 * Store a newly created manager in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Manager::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Manager::create($data);

		return Redirect::route('managers.index');
	}

	/**
	 * Display the specified manager.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$manager = Manager::findOrFail($id);

		return View::make('managers.show', compact('manager'));
	}

	/**
	 * Show the form for editing the specified manager.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manager = Manager::find($id);

		return View::make('managers.edit', compact('manager'));
	}

	/**
	 * Update the specified manager in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$manager = Manager::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Manager::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$manager->update($data);

		return Redirect::route('managers.index');
	}

	/**
	 * Remove the specified manager from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Manager::destroy($id);

		return Redirect::route('managers.index');
	}

}
