<?php

namespace Services\Validation;
use Services\Models\User;

class Valid {

    public function passValidation($pass1,$pass2){
        if ($pass1!=$pass2){
            
            return null;
        }
        return true;
    }

    public function userValidation($username)
    {
        $user= new User;
        
        $InUser = $user->getUserByusername($username);
        return $InUser;
    }
}