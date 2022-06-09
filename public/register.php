<?php

require("../loader.php");

use Services\Models\User;
use Services\Validation\valid;
use Services\Layout\Layout;

$user = new User;
$valid = new Valid;

if (isset($_POST["action"]) and $_POST["action"]=="register") {
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
                redirect("/login.php");
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

Layout::render('register');
