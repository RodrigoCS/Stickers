<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStickersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Albums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Title');
			$table->string('Color');
			$table->timestamps();
		});


		Schema::create('Stickers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Title')->unique();
			$table->string('SubTitle');
			$table->string('Creator');
			$table->string('Color');
			$table->integer('Album');
			$table->enum('Position', array('Horizontal','Vertical'));
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
