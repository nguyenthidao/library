<?php
class Connection{
    function getDb(){
        $url = "mysql:host=localhost; dbname=libary";
        $username = "root";
        $password = "";

        try {
            $db = new PDO($url, $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }
        catch (PDOException $e) {
            echo "error";
        }
    }
}




