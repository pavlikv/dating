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

class dbfunctions
{
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

    function addMemeber($member) {
        $dbh = $this->connect();

        $sql = "INSERT INTO Members (fname,lname,age,gender,phone,email,state,seeking,bio,premium,image,interests)
            VALUES (:first, :last, :age, :gender, :phone, :email, :state, :seeking, :bio, :premium, :image, :interests)";

        $indoor = implode(' ', (array)$member->getIndoorInterests());
        $outdoor = implode(' ', (array)$member->getOutDoorInterests());
        $interests = $indoor .' '. $outdoor;


        $statement = $dbh->prepare($sql);

        $statement->bindParam(':first', $first, PDO::PARAM_STR);
        $statement->bindParam(':last', $last, PDO::PARAM_STR);
        $statement->bindParam(':age', $age, PDO::PARAM_STR);
        $statement->bindParam(':gender', $gender, PDO::PARAM_STR);
        $statement->bindParam(':phone', $phone, PDO::PARAM_STR);
        $statement->bindParam(':premium', $premium, PDO::PARAM_STR);
        $statement->bindParam(':email', $email, PDO::PARAM_STR);
        $statement->bindParam(':state', $state, PDO::PARAM_STR);
        $statement->bindParam(':seeking', $seeking, PDO::PARAM_STR);
        $statement->bindParam(':bio', $bio, PDO::PARAM_STR);
        $statement->bindParam(':image', $image, PDO::PARAM_STR);
        $statement->bindParam(':interests', $interests, PDO::PARAM_STR);

        $success = $statement->execute();

        return $success;

    }

function getMembers()
{
    $dbh = $this->connect();


    //1. define the query
    $sql = "SELECT * FROM Members";

    //2. prepare the statement
    $statement = $dbh->prepare($sql);

    //3. bind parameters

    //4. execute the statement
    $statement->execute();

    //5. return the result
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    //print_r($result);
    return $result;
}
}