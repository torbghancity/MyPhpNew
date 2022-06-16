<?php

namespace services\Controllers;

use Services\Models\User;
use Services\Auth\Auth;
use Services\Layout\Layout;
use Services\Validation\valid;

class AuthControllers {

    public function login(){

        Layout::render('Auth.login',['errormessages' => '']);

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
            Layout::render('Auth.login',['errormessages' => 'کاربر یافت نشد']);
        }

    }

    public function logout(){
        Auth::logout();
        redirect("/");
    }

    public function register(){

        Layout::render('Auth.register',['errormessages' => '']);

    }

    public function doregister(){

        $user = new User;
        $valid = new Valid;

        $user->name = $_POST["name"];
        $user->username = $_POST["username"];
        $user->password = $_POST["password"];
        $password_repeat=$_POST["password_repeat"];
        
        $Validation= $valid->Validation($user->name,$user->username,$user->password,$password_repeat);
        
        if ($Validation==''){
            $userData = $user->create();
            Layout::render('Auth.login',['errormessages' => '']);
        }
        else{
            Layout::render('Auth.register',['errormessages' => $Validation]);
        }
    }

    public function checkvalid(){
        $fullurl = "htttp://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if (strpos($fullurl,"singup=empty")){
            $errormessages = "تمام خانه ها باید پر شود";
            
        }

        if (strpos($fullurl,"singup=notmatch")){
            $errormessages = "پسورد و تکرار آن باهم یکسان نیست";
        }

        if (strpos($fullurl,"singup=onuser")){
            $errormessages = "نام کاربری قبلا استفاده شده است";
        }

        Layout::render('Auth.register',["errormessages" => $errormessages]);

    }

}
