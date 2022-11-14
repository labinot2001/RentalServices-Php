<?php

    
    function getdbconnection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "carrental";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname;", $username, $password);
            //set PDO error mode to Exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "success!";
            return $conn;
        } catch (PDOExcpetion $e) {
            echo "Connection Failed: ". $e->getMessage();
        }


    }  
    
?>