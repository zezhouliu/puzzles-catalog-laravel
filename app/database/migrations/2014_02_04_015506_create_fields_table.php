<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Fields in the csv: id,name
		// The csv can be found at database/seeds/csvs/fields.csv
		Schema::create('fields', function($table)
        {
            $table->increments('id');
            $table->string('code');
            $table->string('name');
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
		Schema::drop('fields');
	}

}
