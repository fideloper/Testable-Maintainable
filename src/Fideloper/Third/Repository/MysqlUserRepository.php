<?php namespace Fideloper\Third\Repository;

class MysqlUserRepository implements UserRepositoryInterface
{
    protected $mysql;

    public function __construst()
    {
        $this->mysql = new MySQLConnection( Config::get('db_connection_string') );
    }

    public function getUser($user_id)
    {
        $result = $this->mysql->select('id, username')
                              ->from('users')
                              ->where('id', $user_id)
                              ->limit(1)
                              ->get();

        if( $result->num_rows() > 0 )
        {
            return $result->row();
        }

        return false;
    }
}