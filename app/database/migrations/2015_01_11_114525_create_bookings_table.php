<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookings', function($table) {
			$table->increments('booking_id');
			$table->integer('classroom_id')->unsigned();
			$table->foreign('classroom_id')->references('id')->on('classrooms');
			$table->integer('teacher_id')->unsigned();
			$table->foreign('teacher_id')->references('id')->on('users');
			$table->dateTime('start_time');
			$table->dateTime('end_time');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bookings');
	}

}
