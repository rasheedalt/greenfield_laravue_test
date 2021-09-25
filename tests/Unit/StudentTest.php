<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function fetchStudentTest()
    {
        $this->json('GET', 'api/student/1', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }
}
