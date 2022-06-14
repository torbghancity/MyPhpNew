<?php

namespace services\Controllers;

use Services\Models\Message;
use Services\Layout\Layout;

class ContactControllers {

    public function home(){
        $message = new Message;
        $messages = $message->getAll();
        Layout::render( 'contact' , ['messages' => $messages] );
        
    }

    public function insert(){
        $message = new Message;
        $message->insert();
        redirect("/contact");
    }
}
