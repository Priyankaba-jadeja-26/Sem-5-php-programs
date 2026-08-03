<?php
    $host = "localhost";
    $username = "root";
    $password = "";

    $connection = new mysqli($host,$username,$password);

    if($connection->connect_error){
        die("Connection failed.". $connection->connect_error);
    }

    echo "Connection set";

    $databaseCreation = "CREATE DATABASE StudentData";

    if($connection->query($databaseCreation) === TRUE){
        echo "Database created successfully.";
    } else {
        echo "Error in creating the Database." . $connection->connect_error;
    }

    //echo "Database is created. but cannot run that again as it is causing error of database already exist in the file location";

?>