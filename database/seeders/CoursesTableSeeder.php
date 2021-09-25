<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'id' => 1,
                'name' => 'Philosophy',
                'code' => '201',
                'semester_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'English Language',
                'code' => '207',
                'semester_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Philosophy',
                'code' => '206',
                'semester_id' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Philosophy',
                'code' => '202',
                'semester_id' => 2,
            ],
        ];

        foreach($courses as $course){
            Course::updateOrCreate(['id' => $course['id']], $course);
        }
    }
}
