<?php

class UsersController extends BaseController {

	public function create() {
		return View::make('users.create');
	}
	public function store() {
		User::create([
			'username' => Input::get('username'),
			'email' => Input::get('email'),
			'password' => Hash::make(Input::get('password')),
			'picture' => 'default.jpg'
		]);
	}
	public function updateUsername() {
		if ($user = User::where('username', Auth::user()->username)->first()) {
		    $user->username = Input::get('username');
		    $user->save();
		}
		return Redirect::to('/profile');
	}
	public function updatePassword() {
	   $user = Auth::user();
	   $rules = array(
		   	'password'         => 'required',
			'password_new'         => 'required|different:password|confirmed',
			'password_new_confirmation' => 'required'
	   );

	    $validator = Validator::make(Input::all(), $rules);
	    if ($validator->fails()) {
	        return Redirect::to('profile')->withErrors($validator);
	    } 
	    else 
	    {
	        if (!Hash::check(Input::get('password'), $user->password)) {
	            return Redirect::to('profile')->withErrors('Your old password does not match');
	        }
	        else {
	            $user->password = Hash::make(Input::get('password_new'));
	            $user->save();
	            return Redirect::to('profile')->withMessage("Password have been changed");
	        }
	    }
	}
}
