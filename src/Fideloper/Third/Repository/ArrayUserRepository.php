<?php namespace Fideloper\Third\Repository;

class MysqlUserRepository implements UserRepositoryInterface
{
    protected $array;

    public function __construst()
    {
        $this->array = new ArrayStorage();
    }

    public function getUser($user_id)
    {
        if( isset( $array['users'][$user_id] ) )
        {
            // Convert to object, as application expects
            $result = new StdClass;

            $result->id =       $array['users'][$user_id]['id'];
            $result->username = $array['users'][$user_id]['username'];

            return $result;
        }

        return false;
    }
}