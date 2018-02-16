<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 2/12/18
 * Time: 11:10 AM
 */

class Member
{

    protected $fname; //string
    protected $lname; //string
    protected $age; //int
    protected $gender;//string
    protected $phone; //string
    protected $email;//string
    protected $state; //string
    protected $seeking;//string
    protected $bio; //string

    public function __construct($fname, $lname, $age, $gender, $phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }

    function getFname() {
        return $this->fname;
    }
    function setFname($name){
        $this->fname = $name;
    }


    function getLname() {
        return $this->lname;
    }
    function setLname($name){
        $this->lname = $name;
    }


    function getAge() {
        return $this->age;
    }
    function setAge($newAge){
        $this->age = $newAge;
    }


    function getGender() {
        return $this->gender;
    }
    function setGender($newGender){
        $this->gender = $newGender;
    }


    function getPhone() {
        return $this->phone;
    }
    function setPhone($newPhone){
        $this->phone = $newPhone;
    }


    function getEmail() {
        return $this->email;
    }
    function setEmail($newEmail){
        $this->email = $newEmail;
    }


    function getState() {
        return $this->state;
    }
    function setState($newState){
        $this->state = $newState;
    }


    function getSeeking() {
        return $this->seeking;
    }
    function setSeeking($newSeeking){
        $this->seeking = $newSeeking;
    }


    function getBio() {
        return $this->bio;
    }
    function setBio($newBio){
        $this->bio = $newBio;
    }
}