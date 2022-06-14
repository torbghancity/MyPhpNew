<?php

namespace services\Controllers;

use Services\Models\TodoList;
use Services\Layout\Layout;

class HomeControllers {

    public function home(){

        $todoList = new TodoList;
        $todoList = $todoList->getAll();
        //if (mysqli_num_rows($todoList) > 0)
        Layout::render('index',['todo' => $todoList]);

    }

    public function store(){
        $todoList = new TodoList;
        $action = $_POST["action"];
        $todoList->$action();
        redirect("/");

    }

    public function delete(){
        $todoList = new TodoList;
        $action = $_POST["action"];
        $todoList->$action();
        redirect("/");
    }

    public function done(){
        $todoList = new TodoList;
        $action = $_POST["action"];
        $todoList->$action();
        redirect("/");
    }

}