<?php

class FacultyTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculty')->delete();
        Faculty::create(['first_name' => 'David', 'last_name' => 'Malan']);
        Faculty::create(['first_name' => 'Bill', 'last_name' => 'Bossert']);
    }

}
