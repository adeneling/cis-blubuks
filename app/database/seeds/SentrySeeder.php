<?php

/**
* 
*/
class SentrySeeder extends Seeder{
	
	/**
	 *
	 * Jalankan database seedder
	 */
	public function run(){
		//hapus isi table users, groups, user_groups dan throttle
		DB::table('users_groups')->delete();
		DB::table('groups')->delete();
		DB::table('users')->delete();
		DB::table('throttle')->delete();

		try{
			//membuat grup admin
			$group = Sentry::createGroup(array(
				'name'			=> 'admin',
				'permissions' 	=> array(
					'admin'=>1,
				),
			));

			//membuat grup regular
			$group = Sentry::createGroup(array(
				'name'			=>'manager',
				'permissions'	=>array(
					'manager'	=>1,
				),
			));

			//membuat grup regular
			$group = Sentry::createGroup(array(
				'name'			=>'customer_service',
				'permissions'	=>array(
					'customer_service'	=>1,
				),
			));

			//membuat grup regular
			$group = Sentry::createGroup(array(
				'name'			=>'regular',
				'permissions'	=>array(
					'regular'	=>1,
				),
			));
		} catch(Cartalyst\Sentry\Groups\NameRequiredException $e){
			echo "Name field is required!";
		} catch(Cartalyst\Sentry\Groups\GroupExistsException $e){
			echo "Group already exists";
		}

		try{
			//membuat admin baru
			$admin = Sentry::register(array(
				'email' => 'admin@blubuks.com',
				'password'=> 'maulana12',
				'first_name' => 'Admin',
				'last_name' => 'Maulana'

			), true); // langsung aktivasi

			//cari grup admin
			$adminGroup = Sentry::findGroupByName('admin');

			//masukan user ke grup admin
			$admin->addGroup($adminGroup);

			//membuat manger baru
			$manager = Sentry::register(array(
				'email' => 'manager@blubuks.com',
				'password'=> 'maulana12',
				'first_name' => 'Manager',
				'last_name' => 'Maulana'

			), true); // langsung aktivasi

			//cari grup manager
			$managerGroup = Sentry::findGroupByName('manager');

			//masukan user ke grup manager
			$manager->addGroup($managerGroup);

			//membuat Customer Service Baru
			$cs = Sentry::register(array(
				'email' => 'cs@blubuks.com',
				'password'=> 'maulana12',
				'first_name' => 'Admin',
				'last_name' => 'Maulana'

			), true); // langsung aktivasi

			//cari grup admin
			$csGroup = Sentry::findGroupByName('customer_service');

			//masukan user ke grup admin
			$cs->addGroup($csGroup);

			//membuat user regular baru
			$user = Sentry::register(array(
				'email' => 'user@gmail.com',
				'password'=>'user12',
				'first_name' => 'Kuncoro',
				'last_name' => 'Buwono'
			),true); //langsung aktivasi

			//cari grup regular
			$regularGroup = Sentry::findGroupByName('regular');

			//masukan user ke grup regular
			$user->addGroup($regularGroup);
			
		}catch(Cartalyst\Sentry\Users\LoginRequiredException $e){
			echo 'Login field is required.';
		}catch(Cartalyst\Sentry\Users\PasswordRequiredException $e){
			echo 'Password field is required.';

		}catch(Cartalyst\Sentry\Users\UserExistsException $e){
			echo 'User with this login already exists.';
		}catch(Cartalyst\Sentry\Groups\GroupNotFoundException $e){
			echo 'Group was not found.' ;
		}

	}

}