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
    public static function connect()
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

    public function addMemeber($member) {
        $dbh = $this->connect();

        $sql = "INSERT INTO Members (fname,lname,age,gender,phone,email,state,seeking,bio,premium,image,interests)
            VALUES (:first, :last, :age, :gender, :phone, :email, :state, :seeking, :bio, :premium, :image, :interests)";


        if($member instanceof PremiumMember){
            $isPremium = "on";
            $indoor = implode(', ', (array)$member->getInDoorInterests());
            $outdoor = implode(', ', (array)$member->getOutDoorInterests());
            $interests = $indoor .' '. $outdoor;
        } else {
            $isPremium = "off";
        }
        $image = "NULL";

        $statement = $dbh->prepare($sql);

        $statement->bindParam(':first', $member->getFname(), PDO::PARAM_STR);
        $statement->bindParam(':last', $member->getLname(), PDO::PARAM_STR);
        $statement->bindParam(':age', $member->getAge(), PDO::PARAM_STR);
        $statement->bindParam(':gender', $member->getGender(), PDO::PARAM_STR);
        $statement->bindParam(':phone', $member->getPhone(), PDO::PARAM_STR);
        $statement->bindParam(':premium', $isPremium, PDO::PARAM_STR);
        $statement->bindParam(':email', $member->getEmail(), PDO::PARAM_STR);
        $statement->bindParam(':state', $member->getState(), PDO::PARAM_STR);
        $statement->bindParam(':seeking', $member->getSeeking(), PDO::PARAM_STR);
        $statement->bindParam(':bio', $member->getBio(), PDO::PARAM_STR);
        $statement->bindParam(':image', $image, PDO::PARAM_STR);
        $statement->bindParam(':interests', $interests, PDO::PARAM_STR);

        $success = $statement->execute();

        return $success;

    }

    public static function getMembers()
    {
        $dbh = dbfunctions::connect();


        //1. define the query
        $sql = "SELECT * FROM Members ORDER BY lname";

        //2. prepare the statement
        $statement = $dbh->prepare($sql);

        //4. execute the statement
        $statement->execute();

        //5. return the result
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        return $result;
    }
}