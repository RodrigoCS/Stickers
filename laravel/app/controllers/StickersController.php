<?php
use Illuminate\Database\Eloquent\ModelNotFoundException;

class StickersController extends BaseController {

	public function showSticker($id)
	{
		try
		{
			$stick = Sticker::findOrFail($id);

		}catch(ModelNotFoundException $e)
		{
			Redirect::back();
		}
	}

	public function showCollection($album)
	{
		try
		{
			$album = Album::findOrFail($album);
		}catch(ModelNotFoundException $e)
		{
			Redirect::back();
		}
	}
}