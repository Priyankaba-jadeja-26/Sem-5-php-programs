<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "StudentData";

    $connection = new mysqli($host,$username,$password,$database);

    if($connection->connect_error){
        die("Error in creating database.");
    }

    echo "Connection done";

    $tableCreation = "CREATE TABLE StudentInfo(StudentID int(10) PRIMARY KEY, StudentName varchar(50) NOT NULL, Gender varchar(10), Username varchar(25) UNIQUE,password varchar(50) NOT NULL, Course varchar(50), MobileNo int(10) NOT NULL, ImgURL varchar(100) NOT NULL);";

    if($connection->query($tableCreation) === TRUE){
        echo "Table created successfully..";
    } else {
        echo "Error in creating the student info table";
    }
?>