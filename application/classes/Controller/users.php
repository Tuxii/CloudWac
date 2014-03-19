<?php defined('SYSPATH') or die('No direct script access.');


class Controller_Users extends Controller_Website {

	public function action_index()
	{
		$this->template->content = View::factory('users/info')
			->bind('user', $user);
		
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('users/login');
		}
	}

	public function action_signup() 
	{

		$this->template->title  .= " - Inscription";
		$this->template->content = View::factory('users/signup')
			->bind('errors', $errors)
			->bind('message', $message);
			
		if (HTTP_Request::POST == $this->request->method()) 
		{		

				

			// $external_values = array(
	  //       // The unhashed password is needed for comparing to the password_confirm field
	  //       'password' => $this->request->post('password'),
		 //    // Add all external values
		 //    ) + Arr::get($_POST, '_external', array());
		 //    $extra = Validation::factory($external_values)
		 //        ->rule('password_confirm', 'matches', array(':validation', ':field', 'password'));
			try {
		

				$user                    = ORM::factory('user');
				$user->username          = $this->request->post('username');
				$user->email             = $this->request->post('email');
				$user->password          = $this->request->post('password');
				$user->max_allowed_space = 104857600; // 100 Mo
				$user->space_used        = 0;
				
				// Grant user login role
				$user->save();

				$user->add('roles', ORM::factory('role', array('name' => 'login')));

				
				// Reset values so form is not sticky
				$_POST = array();

				// log l'user après inscription
				$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
				$user = Auth::instance()->login($user->username, $this->request->post('password'), $remember);
			
				// If successful, redirect user
				if ($user) 
				{
					$this->redirect('/home/index');
				} 
				else 
				{
					$message = 'Login failed';
				}
					
				// Set success message
				$message = "You have added user '{$user->username}' to the database";
				
			} catch (ORM_Validation_Exception $e) {

				
				// Set failure message
				$message = 'Impossible de poursuivre l\'inscription, les erreurs suivantes sont apparues :';
				
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}
	
	public function action_login() 
	{
		$this->template->title .= " - Connexion";
		$this->template->content = View::factory('users/login')
			->bind('message', $message)
			->bind('errors', $errors);
			
		if (HTTP_Request::POST == $this->request->method()) 
		{
			// Attempt to login udser
			$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
			$user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);
			
			// If successful, redirect user
			if ($user) 
			{
				$this->redirect('users/index');
			} 
			else 
			{
				$message = 'Login failed';
			}
		}
	}
	
	public function action_logout() 
	{
		// Log user out
		Auth::instance()->logout();
		
		// Redirect to login page
		$this->redirect('users/login');
	}


	public function action_edit() {

		$this->template->title .= " - Edition de profil";
		$user= Auth::instance()->get_user();
		$this->template->content = View::factory('users/edit')
			->bind('message', $message)
			->bind('errors', $errors)
			->bind('user', $user);

		if (HTTP_Request::POST == $this->request->method()) {


			try {
			
				$user = ORM::factory('user', $user->id);
				$user->username=$this->request->post('username');
				$user->email=$this->request->post('email');
				$user->save();


			} catch (ORM_Validation_Exception $e) {

				
				// Set failure message
				$message = 'There were errors, please see form below.';
				
				// Set errors using custom messages
				$errors = $e->errors('models');
			}

		}



		
	}

}

// <?php defined('SYSPATH') or die('No direct script access.');

// class Controller_Users extends Controller_Website {

// 	public function action_home(){

// 		$this->template->title = __('Welcome sisi');
// 		$this->template->content = View::factory('users/home');
// 	}

// 	public function action_contact(){

// 		$this->template->title = __('Welcome sur le contact');
// 		$this->template->content = View::factory('users/contact');
// 	}

// 	public function action_index()
// 	{
// 		$this->response->body('hello, worfgssdfgld!');
// 		$id = $this->request->param('id');
// 		$this->response->body($id);
// 	}

// 	public function action_signup(){

// 		$view = View::factory('users/signup')
// 		->set('values', $_POST)
// 		->bind('errors', $errors);

// 		$this->template->title .= ' - Inscription';
// 		$this->template->content = $view;


// 		if($_POST){

// 			var_dump($_POST);

// 			if (HTTP_Request::POST == $this->request->method()) 
// 			{			
// 				try {
			
// 					// Create the user using form values
// 					$user = ORM::factory('user')->create_user($this->request->post(), array(
// 						'username',
// 						'password',
// 						'email'				
// 					));
					
// 					// Grant user login role
// 					$user->add('roles', ORM::factory('role', array('name' => 'login')));
					
// 					// Reset values so form is not sticky
// 					$_POST = array();
					
// 					// Set success message
// 					$message = "You have added user '{$user->username}' to the database";
					
// 				} catch (ORM_Validation_Exception $e) {

// 					// Set failure message
// 					$message = 'There were errors, please see form below.';
					
// 					// Set errors using custom messages
// 					$errors = $e->errors('models');
// 				}
// 			}	

// 			// $validate = Validation::factory($array);
// 			// $validate->rule('username', 'not_empty');
// 			// $validate->rule('email', 'email');
// 			// $validate->rule('cpassword', 'matches', array(':validation', 'cpassword', 'password'));

// 			// try{
// 			// 	$user = ORM::factory('User');
// 			// 	$user->username = $this->request->post('username');
// 			// 	$user->password = Auth::instance()->hash_password($this->request->post('password'));
// 			// 	$user->email = $_POST['email'];

// 			// 	$user->add('roles', ORM::factory('role', array('name' => 'login')));
// 			// 	$user->save();
// 			// 	//$this->redirect('/users/signup');

// 			// }
// 			// catch(ORM_Validation_Exception $e){
// 			// 	$errors = $e->errors;
// 			// }

// 		}
		
		


// 		// $user = ORM::factory('User');
// 		// $user->username = $this->request->post('username');

// 	}

// 	public function action_login(){

// 		$view = View::factory('users/login')
// 		->set('values', $_POST)
// 		->bind('errors', $errors);

// 		$this->template->title .= ' - Login';
// 		$this->template->content = $view;

// 		if (HTTP_Request::POST == $this->request->method()) 
// 		{
// 			// Attempt to login user
// 			$remember = array_key_exists('remember', $this->request->post()) ? (bool) $this->request->post('remember') : FALSE;
// 			$user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), $remember);
			
// 			// If successful, redirect user
// 			if ($user) 
// 			{
// 				Request::current()->redirect('user/index');
// 			} 
// 			else 
// 			{
// 				$message = 'Login failed';
// 			}
// 		}

// 	}

// 	public function action_logout(){

// 		#Sign out the user
// 		Auth::instance()->logout();
 
// 		#redirect to the user account and then the signin page if logout worked as expected
// 		Request::instance()->redirect('users/login');
// 	}

// } // End Welcome
