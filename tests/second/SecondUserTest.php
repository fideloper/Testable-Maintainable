<?php

use Fideloper\Second\User;

class SecondUserTest extends PHPUnit_Framework_TestCase {

    /**
    * 1. Pass in user (yay)
    * 2. Bootstrap app (again) OR Mock it
    */
    public function testGetCurrentUser()
    {
        $db_connection = '??';

        $user = new User( $db_connection );

        $result = $user->getUser( 1 );

        $expected = new StdClass();
        $expected->id = 1;
        $expected->username = 'fideloper';

        $this->assertEquals( $result->id,        $expected->id,          'User ID set correctly' );
        $this->assertEquals( $result->username,  $expected->username,    'Username set correctly' );
    }

}