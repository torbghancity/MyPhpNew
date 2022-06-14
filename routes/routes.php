<?php

return [
    "/test" => "TestControllers@myTest",
    "/" => "HomeControllers@home",
    "/storenewtodoItem" => "HomeControllers@store",
    "/deltodoItem" => "HomeControllers@delete",
    "/donetodoItem" => "HomeControllers@done",
    "/loginhome" => "LoginControllers@home",
    "/userlogin" => "LoginControllers@login",
    "/registerhome" => "RegisterControllers@home",
    "/userregister" => "RegisterControllers@register",
    "/userlogout" => "LogoutControllers@logout",
    "/contact" => "ContactControllers@home",
    "/messagesinsert" => "ContactControllers@insert",
    "/about" => "AboutControllers@home",
];