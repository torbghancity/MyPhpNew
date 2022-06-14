<?php

namespace services\Controllers;

use Services\Models\User;
use Services\Auth\Auth;
use Services\Layout\Layout;

class LoginControllers {

    public function home(){

        Layout::render('login');

    }

    public function login(){

        $user = new User;

        $username = $_POST["username"];
        $password = $_POST["password"];
        $userData = $user->check($username, $password);
        if($userData){
            $token = Auth::login($userData["id"]);
            redirect("/");
        }
        else{
            echo "No .. ";
        }

    }

}
