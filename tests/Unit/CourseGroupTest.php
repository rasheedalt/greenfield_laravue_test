<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CourseGroupTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function fetchGroupCourseTest()
    {
        $this->json('GET', 'api/course-group/1', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }
}
