<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Search The Student </title>
</head>
<body>
    <h1>Search the student</h1>

    <form action="" method="post" enctype="multipart/form-data">

        <label for="studID">Enter Student ID: </label>
        <br>

        <input type="text" name="studID" id="studID" required>
        <input type="submit" value="Search">

    </form>
    
    <?php 
        if(isset($_POST['studID'])){
            $studentID = $_POST['studID'];
            //echo "$studentID";
            
            $file = fopen("Task12_StudentData.csv","r");
            $flag = 0;
            //$arrStudentData = file($filen);
            while(!feof($file)){
                $data = fgetcsv($file);

                if($data[0] == $studentID){
                    $temp_data = $data;
                    echo "------------Student Details------------";
                    echo "<br>";
                    echo "Student ID : ".$data[0];
                    echo "<br>";
                    echo "Student Name : ".$data[1];
                    echo "<br>";
                    echo "Gender : ".$data[2];
                    echo "<br>";
                    echo "Student Couse : ".$data[5];

                    $path = "/priyanka_xamp/priyanka_php/with%20php/images_php/".$temp_data[7];
                    //echo $path;
                    echo "<br>";
                    echo "Profile photo of student: ";
                    echo "<br>";
                    echo "<img src=$path alt=$temp_data[5] style=width:200px; height:150px; border:2px solid black;>";
                    $flag = 1;
                }
            }

            if($flag == 0){
                echo "Oops.. Student not found.!!";
                echo "<br>";
                echo "Please find some another student";
                
            }
        }
            
        
    ?>
</body>
</html>