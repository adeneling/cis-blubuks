<?php

class GuestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('guest.index');
	}

	public function login()
	{
		return View::make('guest.login');
	}

	public function signup(){
		return View::make('guest.signup');
	}


	public function register(){

		$validator = Validator::make( $data = Input:: all (), User::$rules);

		if ( $validator-> fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
	
		// Register User tanpa diaktivasi
		$user = Sentry::register( array(
			'email' => Input::get( 'email' ),
			'password' => Input::get( 'password' ),
			'first_name' => Input::get( 'first_name' ),
			'last_name' => Input::get( 'last_name' ),
			'id_card_number' => Input::get( 'id_card_number' ),
			'address' => Input::get( 'address' )
		), true);
		
		// Cari grup regular
		$regularGroup = Sentry:: findGroupByName( 'regular' );
		
		// Masukkan user ke grup regular
		$user->addGroup( $regularGroup);

		return Redirect::route('guest.login' )->with('successMessage' , "Akun Berhasil dibuat. " );
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	

	public function create(){

	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
