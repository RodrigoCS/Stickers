<?php

class FriendsController extends BaseController {
	public function getIndex()
	{
	    $not_friends = User::where('id', '!=', Auth::user()->id);
	    if (Auth::user()->friends->count()) {
	      $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
	    }
	    $not_friends = $not_friends->get();
	 
	    return View::make('friends')->with('not_friends', $not_friends);
	}

	/*public function addFriend()
	{
	  $user = User::find(1);
	  Auth::user()->addFriend($user);
	  return Redirect::back();
	}*/
}
