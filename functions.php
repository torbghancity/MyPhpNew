<?php

function dd($name){
    var_dump($name);
    exit();
}



function redirect($url){
    var_dump($url);
    header("Location: $url");
    exit();
}

