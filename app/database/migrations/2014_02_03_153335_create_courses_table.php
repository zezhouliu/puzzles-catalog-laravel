<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function($table)
        {
            // fields in the CSV:
            // cat_num,term,bracketed,field,number,title,faculty,description,
            // prerequisites,notes,meetings,building,room
            // The csv can be found at database/seeds/csvs/courses.csv

            $table->increments('id');

            $table->integer('cat_num');
            $table->string('term');
            $table->boolean('bracketed'); # replaced TRUE with 1 and FALSE with 0 in csv
            $table->string('field');
            $table->string('number');
            $table->string('title');
            $table->string('faculty');
            $table->text('description');
            $table->text('prerequisites');
            $table->text('notes');
            $table->text('meetings');
            $table->string('building');
            $table->string('room');
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
        Schema::drop('courses');
    }

}
