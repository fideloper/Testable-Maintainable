<?php

use Mockery as m;
use Fideloper\Third\User;

class SecondUserTest extends PHPUnit_Framework_TestCase {

    public function testGetCurrentUserMock()
    {
        $userRepo = $this->_mockUserRepo();

        $user = new User( $userRepo );

        $result = $user->getUser( 1 );

        $expected = new StdClass();
        $expected->id = 1;
        $expected->username = 'fideloper';

        $this->assertEquals( $result->id,        $expected->id,          'User ID set correctly' );
        $this->assertEquals( $result->username,  $expected->username,    'Username set correctly' );
    }

    protected function _mockUserRepo()
    {
        // Mock expected result
        $result = new StdClass();
        $result->id = 1;
        $result->username = 'fideloper';

        // Mock any user repository
        $userRepo = m::mock('Fideloper\Third\Repository\UserRepositoryInterface');
        $userRepo->shouldReceive('getUser')->once()->andReturn( $result );

        return $userRepo;
    }

}