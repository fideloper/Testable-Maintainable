<?php namespace Fideloper\Second;

class User {

    protected $db;

    public function __construct($db_connection)
    {
        $this->db = $db_connection;
    }

    public function getUser($user_id)
    {

        $user = $this->db->select('id, username')
                          ->where('id', $user_id)
                          ->limit(1)
                          ->get();

        if ( $user->num_results() > 0 )
        {
                return $user->row();
        }

        return false;
    }
}