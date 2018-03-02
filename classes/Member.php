<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 2/12/18
 * Time: 11:10 AM
 */

/**
 * Member class.
 * creates a member frm the dating website
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

    /**
     * Member constructor.
     * @param $fname first name
     * @param $lname, last name
     * @param $age, age of the user
     * @param $gender, gender of the user
     * @param $phone, phone number
     */
    public function __construct($fname, $lname, $age, $gender, $phone)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
        $this->gender = $gender;
        $this->phone = $phone;
    }

    /**
     * getter method for the first name
     * @return first name
     */
    function getFname() {
        return $this->fname;
    }

    /**
     * Setter method for the first name
     * @param $name
     */
    function setFname($name){
        $result = ctype_alpha($name);
        if($result) {
            $this->fname = $name;
        }
        $this->fname = "null";
    }

    /**
     * Getter method for last name
     * @return lname, last name
     */
    function getLname() {
        return $this->lname;
    }

    /**
     * Setter method for the last name
     * @param $name, new last name
     */
    function setLname($name){
        $this->lname = $name;
    }

    /**
     * Getter method for the age
     * @return age
     */
    function getAge() {
        return $this->age;
    }

    /**
     * Setter method for age
     * @param $newAge
     */
    function setAge($newAge){
        if(is_numeric($newAge)){
            $this->age = $newAge;
        }
        $this->age = "0";
    }


    /**
     * getter method for the gender
     * @return gender
     */
    function getGender() {
        return $this->gender;
    }

    /**
     * Setter method for gender
     * @param $newGender
     */
    function setGender($newGender){
        $this->gender = $newGender;
    }

    /**
     * Getter method for phone
     * @return phone
     */
    function getPhone() {
        return $this->phone;
    }

    /**
     * Setter method for phone
     * @param $newPhone
     */
    function setPhone($newPhone){
        if(is_numeric($newPhone)) {
            $this->phone = $newPhone;
        }
        $this->phone = "0000000000";
    }

    /**
     * Getter method for email
     * @return email
     */
    function getEmail() {
        return $this->email;
    }

    /**
     * Setter method for email
     * @param $newEmail
     */
    function setEmail($newEmail){
        $this->email = $newEmail;
    }

    /**
     * Getter method for state
     * @return state
     */
    function getState() {
        return $this->state;
    }

    /**
     * Setter method for state
     * @param $newState
     */
    function setState($newState){
        $this->state = $newState;
    }

    /**
     * Getter method for seeking
     * @return seeking
     */
    function getSeeking() {
        return $this->seeking;
    }

    /**
     * Setter method for seeking
     * @param $newSeeking
     */
    function setSeeking($newSeeking){
        $this->seeking = $newSeeking;
    }

    /**
     * Getter method for the bio
     * @return bio
     */
    function getBio() {
        return $this->bio;
    }

    /**
     * Setter method for the bio
     * @param $newBio
     */
    function setBio($newBio){
        $this->bio = $newBio;
    }
}