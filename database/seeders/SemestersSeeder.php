<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemestersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $semesters = [
            [
                'id' => 1,
                'name' => '2019/2020 first semester',
                'number' => 1,
                'year' => 2019,
                'start_date' => '01-01-2019',
                'end_date' => '01-06-2019',
            ],
            [
                'id' => 2,
                'name' => '2019/2020 first semester',
                'number' => 1,
                'year' => 2019,
                'start_date' => '01-01-2019',
                'end_date' => '01-06-2019',
            ],
        ];

        foreach($semesters as $semester){
            Semester::updateOrCreate(['id' => $semester['id']], $semester);
        }
    }
}
