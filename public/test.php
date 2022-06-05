<?php

require ("../loader.php");

use Jenssegers\Blade\Blade;

$blade = new Blade(__DIR__ . '/../views', 'cache');

echo $blade->make('homepage', ['name' => 'John Doe'])->render();