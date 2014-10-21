<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightScheduleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('flight_schedule', function(Blueprint $table)
		{
			$table->integer('FsID', true)->primary();
			$table->date('flightDate');
			$table->time('departure');
			$table->time('arrival');
			$table->integer('aircraft');
			$table->integer('airfare');

			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('flight_schedule');
	}

}
