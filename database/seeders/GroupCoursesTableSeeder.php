<?php

namespace Database\Seeders;

use App\Models\CourseGroup;
use Illuminate\Database\Seeder;
use PHPUnit\TextUI\XmlConfiguration\Group;

class GroupCoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $groups = [
            [
                'id' => 1,
                'name' => 'Group 1',
                'lecturer_id' => 2,
                'semester_id' => 1,
                'course_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Group 2',
                'lecturer_id' => 3,
                'semester_id' => 2,
                'course_id' => 2
            ],
            [
                'id' => 3,
                'name' => 'Group 3',
                'lecturer_id' => 1,
                'semester_id' => 1,
                'course_id' => 3
            ]
        ];

        foreach($groups as $group){
            CourseGroup::updateOrCreate(['id' => $group['id']], $group);
        }
    }
}
