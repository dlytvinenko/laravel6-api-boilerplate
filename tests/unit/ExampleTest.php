<?php

namespace App\Entities;

class ExampleTest extends \Codeception\Test\Unit


{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $user = \Codeception\Stub::make(new User);
        $this->assertNull($user->getJWTIdentifier());
    }
}
