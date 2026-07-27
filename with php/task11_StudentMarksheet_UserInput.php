<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marksheet</title>
</head>
<body>
    <form action="" method="POST">
        <label for="studentNumber">Enter the Number of students: </label> 
        <input type="number" name="studentNumber" id="studentNumber">
        <br>
        <input type="submit" value="Add the Details." name="submit">
    </form>
        <?php

            if(isset($_POST['submit'])){
                $NumberOfStudent = $_POST['studentNumber'];
                echo "<br>";

                //$students[];
                if(isset($NumberOfStudent)){
                    
                    
                    for($i = 0; $i < $NumberOfStudent; $i++){
                        echo "<fieldset>";
                        
                        echo "Enter Student " . ($i + 1) . " Details: ";
                        echo "<br>";
                        
                        echo "<label for=rollno> rollno </label>";
                        echo "<input type=number name=studentNumber required>";
                        echo "<br>";
                        echo "<label for=studentName> name </label>";
                        echo "<input type=text name=studentName required>";
                        echo "<br>";

                        echo "------Add Marks Details------";
                        echo "</br>";
                        echo "<label for=studentName> Subject 1 marks </label>";
                        echo "<input type=number name=sub1Marks>";
                        echo "<br>";
                        echo "<label for=studentName> Subject 2 marks </label>";
                        echo "<input type=number name=sub2Marks>";
                        echo "<br>";
                        echo "<label for=studentName> Subject 3 marks </label>";
                        echo "<input type=number name=sub3Marks>";
                        echo "<br>";
                        echo "<label for=studentName> Subject 4 marks </label>";
                        echo "<input type=number name=sub4Marks>";
                        echo "<br>";
                        echo "<label for=studentName> Subject 5 marks </label>";
                        echo "<input type=number name=sub5Marks>";
                        echo "<br>";

                        echo "</fieldset>";

                    }
                }
            }
            
        ?>

        <input type="submit" value="Save the Data" name="Save the Data">
        <?php
            
            if(isset($_POST['Save the Data'])){
                $students = $_POST['students'];
                $file = fopen("sampleData.txt","a+");
                echo "file opened successfully.";
                fclose("sampleData.txt");
            }
        
        ?>
        
    
</body>
</html>