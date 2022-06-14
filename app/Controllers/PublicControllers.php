<?php

namespace services\Controllers;

use Services\Layout\Layout;



class PublicControllers {

    public function about(){
        Layout::render('about');
    }

}
