<?php namespace Fideloper\Third;

use Fideloper\Third\Repository\UserRepositoryInterface;

class User {

    protected $user;

    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    public function getUser($user_id)
    {
        return $this->user->getUser( $user_id );
    }
}