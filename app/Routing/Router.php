<?php

namespace Services\Routing;

class Router  
{

    public function run()
    {
        $route = $_SERVER["REQUEST_URI"];

        $routes = require ("../routes/routes.php");

        if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/',$route)){
            return false;
        }

        if (isset($routes[$route])){
        
            $act = $routes[$route];
            $act=explode("@",$act);
        
            $controllerName = "\\Services\\Controllers\\$act[0]";
            $action = $act[1];
            
            $controller = new $controllerName;
            $controller->$action();
            exit;
        }
        
        http_response_code(404);
        require("404.php");
        exit;
    }

}