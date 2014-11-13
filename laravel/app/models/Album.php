<?php

class Album extends Eloquent
{
	protected $table = 'Albums';

	protected $fillable = ['Title', 'Color']
}