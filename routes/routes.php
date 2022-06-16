<?php

return [
    "/" => "HomeControllers@home",
    "/storenewtodoItem" => "HomeControllers@store",
    "/deltodoItem" => "HomeControllers@delete",
    "/donetodoItem" => "HomeControllers@done",
    "/login" => "AuthControllers@login",
    "/userlogin" => "AuthControllers@dologin",
    "/register" => "AuthControllers@register",
    "/doregister" => "AuthControllers@doregister",
    "/logout" => "AuthControllers@logout",
    "/contact" => "ContactControllers@home",
    "/messagesinsert" => "ContactControllers@insert",
    "/about" => "PublicControllers@about",
];