<?php

namespace services\Controllers;

use Services\Models\User;
use Services\Auth\Auth;
use Services\Layout\Layout;
use Services\Validation\valid;

class AuthControllers {

    public function login(){

        Layout::render('login');

    }

    public function dologin(){

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

    public function logout(){
        Auth::logout();
        redirect("/");
    }

    public function register(){

        Layout::render('register');

    }

    public function doregister(){

        $user = new User;
        $valid = new Valid;

        $name = $_POST["name"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password_repeat=$_POST["password_repeat"];
        $passvalid= $valid->passValidation($password,$password_repeat);

        if ($passvalid){
            $uservalid=$valid->userValidation($username);
            if(!$uservalid){
                $userData = $user->create($name,$username, $password);
                if($userData){
                    redirect("/loginhome");
                }
                else{
                    echo "No .. ";
                }
            }
            else{
                echo "نام کاربری قبلا استفاده شده...!";
            }
        }
        else{
            echo "رمز عبور و تکرارش  برابر نیسست...!";
        }
    }

}
