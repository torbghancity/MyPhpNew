<?php

require(__DIR__ ."/services/functions/functions.php");

spl_autoload_register(function ($class_name) {
    
    if (__DIR__ . "/" . $class_name . ".php"){
        
      require (__DIR__ . "/" .  $class_name . ".php");
      
    }
});