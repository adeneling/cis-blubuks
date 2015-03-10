<?php

class HomeController extends BaseController {

	public function dashboard(){
		
		//Pembagian View Untuk Masing-masing Users

		//mengakses User yang ada di DB
		$user = Sentry::getUser();

		//mencari User sesuai Grup 
		$admin = Sentry::findGroupByName( 'admin' );
		$manager = Sentry::findGroupByName( 'manager' );
		$customer_service = Sentry::findGroupByName( 'customer_service' );
		$regular = Sentry::findGroupByName( 'regular' );
	
		// admin
		if ( $user-> inGroup( $admin)) {
			return View::make( 'dashboard.admin' )->withTitle( 'Dashboard' );
		}

		// manager
		if ( $user-> inGroup( $manager)) {
			return View::make( 'dashboard.manager' )->withTitle( 'Dashboard' );
		}

		// customer service
		if ( $user-> inGroup( $customer_service)) {
			return View::make( 'dashboard.customer_service' )->withTitle( 'Dashboard' );
		}
		
		// regular
		if ( $user-> inGroup( $regular)) {
			return View::make( 'dashboard.regular' )->withTitle( 'Dashboard' );

		}	
	}
	public function promo(){
		return View::make('regular.promo')->withTitle( 'Promo dan Discount' );
	}

	public function logout()
	{
		// Logout user
		Sentry::logout();

		// Redirect user ke halaman login
		return Redirect::to( 'login' ) -> with( 'successMessage' , 'Anda berhasil logout.' );
	}
	 
	public function authenticate(){

	 	$credentials = array(
			'email'		=> Input::get('email'),
			'password'	=> Input::get('password'),
		);

		try{
			//autentikasi user
			$user = Sentry::authenticate($credentials, false);
			//redirect ke dashboard
			/*
			return Redirect::to('dashboard');
			*/
			return Redirect::intended( 'dashboard' )-> with( 'infoMessage' , "Anda Berhasil Masuk" );
		} catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
			return Redirect::back() -> with( 'errorMessage' , 'Password yang Anda masukan salah.' );
		} catch (Exception $e) {
			return Redirect::back() -> with( 'errorMessage' , trans( 'Akun dengan email tersebut tidak ditemukan di sistem kami.' ));
		}
	 }
}
