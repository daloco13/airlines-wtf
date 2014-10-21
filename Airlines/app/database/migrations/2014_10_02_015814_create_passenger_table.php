<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassengerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('passenger', function(Blueprint $table)
		{
			$table->integer('PsID')->primary();
			$table->string('Title', 255);
			$table->string('Name', 255);
			$table->date('BDay');
			$table->string('Gender', 10);
			$table->string('Type', 10);
			$table->integer('contact', 11);

			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('passenger');
	}

}
