<?php

require("../loader.php");

use Services\Models\TodoList;
use Services\Layout\Layout;



$todoList = new TodoList;

$validActions = ['done','delete','insert'];
if (isset($_POST["action"]) and in_array($_POST["action"], $validActions)) {
    $action = $_POST["action"];
    $todoList->$action();
    redirect("/");
}


$todoList = $todoList->getAll();
//if (mysqli_num_rows($todoList) > 0)

Layout::render('index',['todo' => $todoList]);