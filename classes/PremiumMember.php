<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 2/15/18
 * Time: 11:15 AM
 */

class PremiumMember extends Member
{

    private $_inDoorInterests = array();
    private $_outDoorInterests = array();


    function getInDoorInterests() {
        return $this->_inDoorInterests;
    }
    function setInDoorInterests($array){
        $this->_inDoorInterests = $array;
    }

    function getOutDoorInterests() {
        return $this->_outDoorInterests;
    }
    function setOutDoorInterests($array){
        $this->_outDoorInterests = $array;
    }
}