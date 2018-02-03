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

$f3->set('states', array('Washington', 'Oregon', 'California'));

//set debug level
$f3->set('DEBUG', 3);

//define a default route
$f3->route('GET /', function() {

    $template = new Template();
    echo $template->render('pages/home.html');
}
);

//define a route
$f3->route('GET|POST /personal-information', function($f3) {
    $template = new Template();
    echo $template->render('pages/personal-information.html');
}
);
//define a route
$f3->route('GET|POST /profile-info', function($f3) {
    $template = new Template();
    if(isset($_POST['submit'])) {
        $first = $_SESSION['firstName'] = $_POST['firstName'];
        $last = $_SESSION['lastName'] = $_POST['lastName'];
        $age = $_SESSION['age'] = $_POST['age'];
        $_SESSION['gender'] = $_POST['gender'];
        $phone = $_SESSION['phone'] = $_POST['phone'];
        $f3->set('firstName', $_SESSION['firstName']);
        $f3->set('lastName', $_SESSION['lastName']);
        $f3->set('age', $_SESSION['age']);
        $f3->set('gender', $_SESSION['gender']);
        $f3->set('phone', $_SESSION['phone']);
        include('model/validate.php');
        $isValid = true;
        if (!validName($first)) {
            $f3->set('invalidFirstName', "invalid");
            $isValid  = false;
        }
        if (!validName($last)) {
            $f3->set('invalidLastName', "invalid");
            $isValid = false;
        }
        if (!validAge($age)) {
            $f3->set('invalidAge', "invalid");
            $isValid = false;
        }
        if (!validPhone($phone)) {
            $f3->set('invalidPhone', "invalid");
            $isValid = false;
        }
        if ($isValid) {
            echo $template->render('pages/profile-info.html');
        } else {

            echo $template->render('pages/personal-information.html');
        }
    } else {
        echo $template->render('pages/personal-information.html');
    }
}
);
//define a route
$f3->route('GET|POST /interests', function($f3) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['seeking'] = $_POST['seeking'];
    $_SESSION['state'] = $_POST['state'];
    $_SESSION['bio'] = $_POST['bio'];

    $f3->set('email', $_SESSION['email']);
    $f3->set('seeking', $_SESSION['seeking']);
    $f3->set('state', $_SESSION['state']);
    $f3->set('bio', $_SESSION['bio']);
    $template = new Template();
    echo $template->render('pages/interests.html');
}
);
//define a route
$f3->route('GET|POST /formSummary', function($f3) {


    $template = new Template();
    if(isset($_POST['submit'])) {
        $_SESSION['indoors'] = $_POST['indoors'];
        $_SESSION['outdoors'] = $_POST['outdoors'];
        $f3->set('firstName', $_SESSION['firstName']);
        $f3->set('lastName', $_SESSION['lastName']);
        $f3->set('age', $_SESSION['age']);
        $f3->set('gender', $_SESSION['gender']);
        $f3->set('phone', $_SESSION['phone']);
        $f3->set('email', $_SESSION['email']);
        $f3->set('seeking', $_SESSION['seeking']);
        $f3->set('state', $_SESSION['state']);
        $f3->set('bio', $_SESSION['bio']);
        $f3->set('indoors', $_SESSION['indoors']);
        $f3->set('outdoors', $_SESSION['outdoors']);
        echo $template->render('pages/formSummary.html');
    }



}
);

//run Fat-Free
$f3->run();