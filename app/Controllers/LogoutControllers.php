<?php

namespace services\Controllers;

use Services\Auth\Auth;

class LogoutControllers {

    public function logout(){
        Auth::logout();
        redirect("/");
    }

}
