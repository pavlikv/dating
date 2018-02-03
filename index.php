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
$f3->route('GET|POST /form1', function($f3) {


    $template = new Template();
    echo $template->render('pages/form1.html');



}
);

//define a route
$f3->route('GET|POST /form2', function() {
    if(isset($_POST['submit'])) {

        $_SESSION['firstName'] = $_POST['firstName'];
        $_SESSION['lastName'] = $_POST['lastName'];
        $_SESSION['age'] = $_POST['age'];
        $_SESSION['gender'] = $_POST['gender'];
        $_SESSION['phone'] = $_POST['phone'];

        //include ('model/validate.php');

    }

    $template = new Template();
    echo $template->render('pages/form2.html');


}
);

//define a route
$f3->route('GET|POST /form3', function() {
    /*
    if(isset($_POST['submit'])) {
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['state'] = $_POST['state'];
        $_SESSION['seeking'] = $_POST['seeking'];
        $_SESSION['bio'] = $_POST['bio'];
    }*/

    $template = new Template();
    echo $template->render('pages/form3.html');


}
);

//define a route
$f3->route('GET|POST /formSummary', function($f3) {
    /*
    if(isset($_POST['submit'])) {
        $_SESSION['indoors'] = $_POST['indoors'];
        $_SESSION['outdoors'] = $_POST['outdoors'];
    }

    $f3->set('outdoors', $_SESSION['outdoors']);
    $f3->set('indoors', $_SESSION['indoors']);
    */

    $f3->set('firstName', $_SESSION['firstName']);
    $f3->set('lastName', $_SESSION['lastName']);
    $f3->set('age', $_SESSION['age']);
    $f3->set('gender', $_SESSION['gender']);
    $f3->set('phone', $_SESSION['phone']);
    /*
    $f3->set('email', $_SESSION['email']);
    $f3->set('state', $_SESSION['state']);
    $f3->set('seeking', $_SESSION['seeking']);
    $f3->set('bio', $_SESSION['bio']);
    */

    $template = new Template();
    echo $template->render('pages/formSummary.html');
}
);

//run Fat-Free
$f3->run();