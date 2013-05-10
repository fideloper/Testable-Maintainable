<?php

use Fideloper\First\User;

class FirstUserTest extends PHPUnit_Framework_TestCase {

    /**
    * 1. Session
    * 2. Bootstrap app for DB (unmockable)
    */
    public function testGetCurrentUser()
    {
        $user = new User;

        $result = $user->getCurrentUser();

        $expected = new StdClass();
        $expected->id = 1;
        $expected->username = 'fideloper';

        $this->assertEquals( $result->id,        $expected->id,          'User ID set correctly' );
        $this->assertEquals( $result->username,  $expected->username,    'Username set correctly' );
    }

}