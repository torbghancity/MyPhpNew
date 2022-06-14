<?php

namespace services\Controllers;

use Services\Layout\Layout;



class AboutControllers {

    public function home(){
        Layout::render('about');
    }

}
