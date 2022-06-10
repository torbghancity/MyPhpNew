<?php

require("../loader.php");

use Services\Models\Message;
use Services\Layout\Layout;

$message = new Message;

if(isset($_POST["action"]) and $_POST["action"]=="insert" )
{
    $message->insert();
    redirect("/contact");
}
$messages = $message->getAll();

Layout::render( 'contact' , ['messages' => $messages] );