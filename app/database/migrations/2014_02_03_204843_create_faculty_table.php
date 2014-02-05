<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('faculty', function($table) {
			// Fields in csv: faculty_id,first,middle,last,suffix
			// The csv can be found at database/seeds/csvs/faculty.csv

			$table->increments('id');
			$table->string('faculty_id')->unique();
            $table->string('first');
            $table->string('middle');
            $table->string('last');
            $table->string('suffix');
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
        Schema::drop('faculty');
	}

}
