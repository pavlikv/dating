<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 1/16/18
 * Time: 9:37 PM
 */

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//set debug level
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function() {

    $view = new View;
    echo $view->render
    ('pages/home.html');
}
);

//run Fat-Free
$f3->run();