<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use Illuminate\Database\Seeder;

class LecturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lecturers = [
            [
                'id' => 1,
                'title' => 'Mr',
                'first_name' => 'Ben',
                'last_name' => 'Cason',
                'email' => 'test@test.com',
            ],
            [
                'id' => 2,
                'title' => 'Mr',
                'first_name' => 'Tein',
                'last_name' => 'Pyne',
                'email' => 'test@test.com',
            ],
            [
                'id' => 3,
                'title' => 'Mrs',
                'first_name' => 'Cage',
                'last_name' => 'Nick',
                'email' => 'test@test.com',
            ],
        ];

        foreach($lecturers as $lecturer){
            Lecturer::updateOrCreate(['id' => $lecturer['id']], $lecturer);
        }
    }
}
