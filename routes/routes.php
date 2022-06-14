<?php

return [
    "/test" => "TestControllers@myTest",
    "/" => "HomeControllers@home",
    "/storenewtodoItem" => "HomeControllers@store",
    "/deltodoItem" => "HomeControllers@delete",
    "/donetodoItem" => "HomeControllers@done",
    "/loginhome" => "AuthControllers@login",
    "/userlogin" => "AuthControllers@dologin",
    "/registerhome" => "AuthControllers@register",
    "/userregister" => "AuthControllers@doregister",
    "/userlogout" => "AuthControllers@logout",
    "/contact" => "ContactControllers@home",
    "/messagesinsert" => "ContactControllers@insert",
    "/about" => "PublicControllers@about",
];