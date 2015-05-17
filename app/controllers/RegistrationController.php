<?php

class RegistrationController extends BaseController {


	public function showLogin()
	{

		$users = User::all();
		// show the form
		return View::make('pages.login', ['users' => $users]);
	}

	public function doLogin()
	{
	
		// validate the info, create rules for the inputs
		$rules = array(
			'email'    => 'required|email', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('/')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {

			// create our user data for the authentication
			$userdata = array(
				'email' 	=> strtolower(Input::get('email')),
				'password' 	=> Input::get('password')
			);




			// attempt to do the login
			if (Auth::attempt($userdata)) {

				$user = Auth::user();

				
						// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
                if(Auth::user()->role == 0){

                    return Redirect::to('/');

                }

                else{
                    return Redirect::to('/students');
                }

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('/')
								->withErrors($validator)
								->withInput(Input::except('password'));

			}

		}


	}

public function doLogout()
		{
			Auth::logout(); // log the user out of our application

			return Redirect::to('/'); // redirect the user to the login screen

		}





public function register()
{

 // Set the user array to gather data from the signup form for new user registration
	$userdata = array(
		'firstName' => Input::get('firstName'),
		'lastName' => Input::get('lastName'),
		'email' => strtolower(Input::get('email')),
		'password' => Input::get('password'),
		'password_confirmation' => Input::get('password_confirmation')
		);

	// Set validation rules
	$rules = array(
		'firstName'=>'required|unique:users',
		'lastName'=>'required|unique:users',
		'email'=>'required|unique:users,email|email',
		'password'=>'required|alpha_num|between:6,100|confirmed',
		'password_confirmation'=>'required|alpha_num|between:6,100',
		);
 
	// Run our validation check
	$validator = Validator::make($userdata, $rules);
 
	// If validation fails then redirect the user back to the signup screen 
	

	if ($validator->fails())
	{
	      return Redirect::to('signup')->withErrors($validator);
    }
	
	$user = new User;
	$user -> firstName = $userdata['firstName'];
	$user -> lastName = $userdata['lastName'];
	$user -> email = $userdata['email'];
	$user -> password = Hash::make($userdata ['password']);

	$user -> save();


	return Redirect::to('login');


    }


}