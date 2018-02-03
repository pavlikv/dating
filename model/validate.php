<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 1/31/18
 * Time: 7:55 PM
 */

function validName($name) {
    return ctype_alpha($name);
}

function validAge($age) {
    return (is_numeric($age) && $age >= 18);
}

function validPhone($phone){
    return preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone);
}

function validOutdoor($listOfOutdoor) {
    $validList = array('hiking', 'biking', 'swimming', 'collecting', 'walking', 'climbing');
    foreach ($listOfOutdoor as $activity) {
        if (!in_array($activity, $validList)) {
            return false;
        }
    }
    return true;
}

function validIndoor($listOfIndoor) {
    $validList = array('tv', 'movies', 'cooking', 'board games', 'puzzles', 'reading', 'playing cards', 'video games');
    foreach ($listOfIndoor as $activity) {
        if (!in_array($activity, $validList)) {
            return false;
        }
    }
    return true;
}
