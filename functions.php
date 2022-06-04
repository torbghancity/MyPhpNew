<?php


function redirect($url){
    var_dump($url);
    header("Location: $url");
    exit();
}

