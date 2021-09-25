<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class SemesterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function fetchAllSemesterTest()
    {
        $this->json('GET', 'api/semesters', ['Accept' => 'application/json'])
            ->assertStatus(200);
    }
}
