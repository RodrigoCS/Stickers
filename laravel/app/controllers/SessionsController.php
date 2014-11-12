<?php

class SessionsController extends BaseController {

	public function create() {
		return View::make('sessions.create');
	}
	public function store() {
		if(Auth::attempt(Input::only('email', 'password')))
		{
			return Redirect::to('/');
		}
		else
			return "Failed";
	}
	public function destroy() {
		Auth::logout();
		return Redirect::to('/');
	}
}
