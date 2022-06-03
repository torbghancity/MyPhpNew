<?php

require(__DIR__ ."/functions.php");

spl_autoload_register(function ($class_name) {
    
    $filepath = __DIR__ . DIRECTORY_SEPARATOR .$class_name .'.php';
    $filename = str_replace('\\', DIRECTORY_SEPARATOR, $filepath);

    if (file_exists($filename)){
        
      require ($filename);

    }
});