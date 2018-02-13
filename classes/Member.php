<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 2/12/18
 * Time: 11:10 AM
 */

class Member
{

    private $_fname; //string
    private $_lname; //string
    private $_age; //int
    private $_gender;//string
    private $_phone; //string
    private $_email;//string
    private $_state; //string
    private $_seeking;//string
    private $_bio; //string

    function __construct($firstName, $lastName, $age, $gender, $phone, $email, $state, $seeking, $bio){
        $this->_fname = $firstName;
        $this->_lname = $lastName;
        $this->_age = $age;
        $this->_gender = $gender;
        $this->_phone = $phone;
        $this->_email = $email;
        $this->_state = $state;
        $this->_seeking = $seeking;
        $this->_bio = $bio;
    }

    function getFname() {
        return $this->_fname;
    }
    function setFname($name){
        $this->_fname = $name;
    }


    function getLname() {
        return $this->_lname;
    }
    function setLname($name){
        $this->_lname = $name;
    }


    function getAge() {
        return $this->_age;
    }
    function setAge($newAge){
        $this->_age = $newAge;
    }


    function getGender() {
        return $this->_gender;
    }
    function setGender($newGender){
        $this->_gender = $newGender;
    }


    function getPhone() {
        return $this->_phone;
    }
    function setPhone($newPhone){
        $this->_phone = $newPhone;
    }


    function getEmail() {
        return $this->_email;
    }
    function setEmail($newEmail){
        $this->_email = $newEmail;
    }


    function getState() {
        return $this->_state;
    }
    function setState($newState){
        $this->_state = $newState;
    }


    function getSeeking() {
        return $this->_seeking;
    }
    function setSeeking($newSeeking){
        $this->_seeking = $newSeeking;
    }


    function getBio() {
        return $this->_bio;
    }
    function setBio($newBio){
        $this->_bio = $newBio;
    }
}