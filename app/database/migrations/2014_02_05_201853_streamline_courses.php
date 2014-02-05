<?php

use Illuminate\Database\Migrations\Migration;

class StreamlineCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function ($table) {
            DB::statement("ALTER TABLE  `courses` CHANGE  `term`  `term` ENUM(  'FALL',  'SPRING' ) ");
            DB::statement("ALTER TABLE  `courses` CHANGE  `cat_num`  `cat_num` INT( 5 ) UNSIGNED NOT NULL");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            Schema::table('courses', function ($table) {
                DB::statement("ALTER TABLE  `courses` CHANGE  `term`  `term` varchar ");
                DB::statement("ALTER TABLE  `courses` CHANGE  `cat_num`  `cat_num` INT( 11 ) NOT NULL");
        });
    }

}
