<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class StreamlineCourses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
        DB::query("ALTER TABLE  `courses` CHANGE  `term`  `term` ENUM(  'FALL',  'SPRING' ) ");
        DB::query("ALTER TABLE  `courses` CHANGE  `cat_num`  `cat_num` INT( 5 ) UNSIGNED NOT NULL");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
            DB::query("ALTER TABLE  `courses` CHANGE  `term`  `term` varchar ");
            DB::query("ALTER TABLE  `courses` CHANGE  `cat_num`  `cat_num` INT( 11 ) NOT NULL");
        });
    }

}
