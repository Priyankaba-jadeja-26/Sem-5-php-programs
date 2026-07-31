<?php
    session_start();
    //if login is successfull then this page will get opened.
    if(!isset($_SESSION['userName'])){
        header("Location:Task15_StudentLogin.php");
        exit();
    }
        $userName = $_SESSION['userName'];
        //echo $userName;
        $file = fopen("Task12_StudentData.csv","r");

        while(!feof($file)){
            $data = fgetcsv($file);

            //echo "file opened successfully.";
            
            if($userName == $data[3]){
                echo "<h1>Student found... </h1>";
                
                echo "<h3>Following are the details of the Student</h3>";
                
                echo "<h3>Student ID : " . $data[0] . "</h3>";
                echo "<h3>Student Name : " . $data[1] . "</h3>";
                echo "<h3>Gender : " . $data[2] . "</h3>";
                echo "<h3>Username : " . $data[3] . "</h3>";
                echo "<h3>Course : " . $data[5] . "</h3>";
                echo "<h3>Contact Number : " . $data[6] . "</h3>";
                $path = "/priyanka_xamp/priyanka_php/with%20php/images_php/".$data[7];
                echo "<h3> Profile photo : " . "<br>". "<img src=$path alt=$data[7] style=width:200px; height:150px; border:2px solid black;>" ."</h3>";
                $logoutPath = "/priyanka_xamp/priyanka_php/with%20php/Task15_LogOut.php";
                
                echo "<form action='Task15_LogOut.php'> <input type='submit'/> </form>";
                break;
            }
        }
?>