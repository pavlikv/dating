<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 3/1/18
 * Time: 10:18 AM
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
require("/home/pvashchu/config.php");

function connect()
{
    try {
        //Instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME,
            DB_PASSWORD);
        //echo "Connected to database!!!";
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }
}