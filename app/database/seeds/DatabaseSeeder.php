<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call('CoursesTableSeeder');
        $this->command->info('Courses table seeded!');

        $this->call('FacultyTableSeeder');
        $this->command->info('Faculty table seeded!');
    }

}
