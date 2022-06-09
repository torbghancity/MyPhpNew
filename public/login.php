<?php

require("../loader.php");

use Services\Models\User;
use Services\Auth\Auth;
use Services\Layout\Layout;

$user = new User;

if (isset($_POST["action"]) and $_POST["action"]=="login") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $userData = $user->check($username, $password);
    if($userData){
        $token = Auth::login($userData["id"]);
        redirect("/index.php");
    }
    else{
        echo "No .. ";
    }
}
Layout::render('login');