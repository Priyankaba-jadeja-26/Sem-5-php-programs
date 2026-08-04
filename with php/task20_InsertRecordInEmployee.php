<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee data</title>
</head>
<body>

    <form action="" method="POST">
        <fieldset>
            <legend>Employee Details</legend>

            <label for="empId">Employee ID: </label>
            <input type="number" name="empId" id="empId" required>
            <br><br>

            <label for="empName">Employee Name: </label>
            <input type="text" name="empName" id="empName" required>
            <br><br>

            <label for="dept">Department: </label>
            <input type="text" name="dept" id="dept" required>
            <br><br>

            <input type="submit" value="Submit" name="submit">
        </fieldset>
            
    </form>

</body>
</html>

<?php
    if(isset($_POST['submit'])){

        $id = $_POST['empId'];
        $name = $_POST['empName'];
        $department = $_POST['dept'];

        $connection = new mysqli("localhost","root","","Employee");

        if($connection->connect_error){
            die("Error in creating connection.". $connection->connect_error);
        }

        // $CreateDB = "CREATE DATABASE Employee";

        // if($connection->query($CreateDB) === TRUE){
        //     echo "Database Created Successfully.";
        // } else {
        //     echo "Error in creating the Database.";
        // }

        // $CreateTable = "CREATE TABLE EmployeeData(id int(5) PRIMARY KEY, name varchar(50), dept varchar(50));";

        // if($connection->query($CreateTable) === TRUE){
        //     echo "Table Created Successfully.";
        // } else {
        //     echo "Error in creating the table";
        // }

        $DataInsertion = "INSERT INTO EmployeeData VALUES($id, '$name' , '$department');";

        if($connection->query($DataInsertion) === TRUE){
            echo "Record Inserted Successfully.";
        } else {
            echo "Error in Inserting a record..";
        }

        echo "<br><br><br>";
        echo "Everything runned successfully.";
    }
    
?>