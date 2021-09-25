<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                'id' => 1,
                'first_name' => 'Ben',
                'last_name' => 'Cason',
                'email' => 'test@test.com',
                'courses' => [1,2,3,4]
            ],
            [
                'id' => 2,
                'first_name' => 'Tein',
                'last_name' => 'Pyne',
                'email' => 'test@test.com',
                'courses' => [1,3,4]
            ],
            [
                'id' => 3,
                'first_name' => 'Cage',
                'last_name' => 'Nick',
                'email' => 'test@test.com',
                'courses' => [1,2,3]
            ]
        ];

        foreach($students as $student){
            $courses = $student['courses'];
            unset($student['courses']);
            $s = Student::updateOrCreate(['id' => $student['id']], $student);
            $s->courses()->sync($courses);
        }
    }
}
