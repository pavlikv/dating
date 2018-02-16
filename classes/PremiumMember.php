<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 2/15/18
 * Time: 11:15 AM
 */

/**
 * Class PremiumMember extends Member.
 * Class is used when a user checks the premium member option.
 * Otherwise will use the Member class.
 */
class PremiumMember extends Member
{


    private $_inDoorInterests = array();
    private $_outDoorInterests = array();


    /**
     * getter method
     * @return array of Indoor interests
     */
    function getInDoorInterests() {
        return $this->_inDoorInterests;
    }

    /**
     * Setter method, to set an array of indoor interests
     * @param $array of interests
     */
    function setInDoorInterests($array){
        $this->_inDoorInterests = $array;
    }

    /**
     * getter method
     * @return array of outdoor interests
     */
    function getOutDoorInterests() {
        return $this->_outDoorInterests;
    }

    /**
     * Setter method, to set an array of outdoor interests
     * @param $array of interests
     */
    function setOutDoorInterests($array){
        $this->_outDoorInterests = $array;
    }
}