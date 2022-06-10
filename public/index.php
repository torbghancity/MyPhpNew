<?php

$route = $_SERVER["REQUEST_URI"];

$routes = require ("../routes/routes.php");


if (isset($routes[$route])){
    require ($routes[$route]);
    exit;
}

http_response_code(404);
require("404.php");
exit;