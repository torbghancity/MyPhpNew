<?php

namespace Services\Layout;

use Jenssegers\Blade\Blade;

class Layout
{
    public static function pageHeader($pageTitle)
    {
        require(__DIR__ . "/header.php");
    }

    public static function pageFooter()
    {
        require(__DIR__ . "/footer.php");
    }



    public static function render($view,$parameters){

        $blade = new Blade(__DIR__ . '/../../views', __DIR__ . '/../../cache');

        echo $blade->make($view, $parameters)->render();
    }
}

