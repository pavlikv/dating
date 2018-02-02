<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 1/16/18
 * Time: 9:37 PM
 */
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//set debug level
$f3->set('DEBUG', 3);

//define a default route
$f3->route('POST|GET /', function() {

    $view = new View;
    echo $view->render
    ('pages/home.html');
}
);


//define a route
$f3->route('GET|POST /form1', function() {

    $template = new Template();
    echo $template->render('pages/form1.html');


}
);

//define a route
$f3->route('GET|POST /form2', function() {


    $template = new Template();
    echo $template->render('pages/form2.html');
    $_SESSION['firstName'] = $_POST['firstName'];
    $_SESSION['lastName'] = $_POST['lastName'];
    $_SESSION['age'] = $_POST['age'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['phone'] = $_POST['phone'];
}
);

//define a route
$f3->route('GET|POST /form3', function() {

    $template = new Template();
    echo $template->render('pages/form3.html');
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['seeking'] = $_POST['seeking'];
    $_SESSION['bio'] = $_POST['bio'];

}
);

//define a route
$f3->route('GET|POST /formSummary', function($f3) {

    $_SESSION['indoor'] = $_POST['indoor'];
    echo "<h1>".$_SESSION['indoor']."</h1>";
    //$f3->set('indoor', $_SESSION['indoor']);

    $f3->set('firstName', $_SESSION['firstName']);
    $f3->set('lastName', $_SESSION['lastName']);
    $f3->set('phone', $_SESSION['phone']);
    $f3->set('phone', $_SESSION['phone']);

    $template = new Template();
    echo $template->render('pages/formSummary.html');
}
);

//run Fat-Free
$f3->run();