<?php namespace Fideloper\First;

class User {

    public function getCurrentUser()
    {
        $user_id = $_SESSION['user_id'];

        $user = App::db()->select('id, username')
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