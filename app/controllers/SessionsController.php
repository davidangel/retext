<?php

class SessionsController extends BaseController {



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$input = Input::all();
		$attempt_login_username = Auth::attempt([
			'username' => $input['username'],
			'password' => $input['password']
		]);
		$attempt_login_email = Auth::attempt([
			'email' => $input['username'],
			'password' => $input['password']
		]);

		// successful login
		if($attempt_login_username || $attempt_login_email) {
			Twilio::message('+18655995614', 'Someone logged into Retext.');
			return Redirect::intended('/')->with('flash_message', 'You have successfully logged in.');
		}

		// failed login
		return Redirect::route('login')->with('flash_message', 'Invalid credentials.');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::home()->with('flash_message', 'You have successfully logged out.');
	}

}
