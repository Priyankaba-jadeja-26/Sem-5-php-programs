<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Student Details: </legend>
            
            <label for="studID">Student ID</label>
            <input type="number" name="studID" id="studID" required>
            <br>

            <label for="studName">Name</label>
            <input type="text" name="studName" id="studName" required>
            <br><br>
            <label for="gender">Select Your Gender :</label>
            <br>
            <label for="Male">Male</label>
            <input type="radio" name="gender" id="Male" value="Male">

            <label for="Female">Female</label>
            <input type="radio" name="gender" id="Female" value="Female">

            <label for="Other">Other</label>
            <input type="radio" name="gender" id="Other" value="Other">
            <br><br>

            <label for="userName">UserName</label>
            <input type="text" name="userName" id="userName" required>
            <br><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <br><br>

            <label for="course">Select Course : </label>
            <select name="course" id="course" required>
                <option value="">------Select Your Course------</option>
                <option value="MSC[CA-IT]">MSC[CA-IT]</option>
                <option value="MSC[IT]">MSC[IT]</option>
                <option value="BSCS">BSCS</option>
                <option value="PGDCA">PGDCA</option>
            </select>
            <br><br>

            <label for="mobile">Mobile number</label>
            <input type="tel" name="mobile" id="mobile" required>
            <br><br>

            <label for="photo">Upload your photo</label>
            <input type="file" name="photo" id="photoUpload" required>
            <br>

            <br>
            <input type="submit" value="Register">

        </fieldset>
    </form>

</body>
</html>

<?php
    echo "PHP Script runned.";
    
    if(isset($_FILES['photo'])){

        $file = fopen("Task12_StudentData.csv","a");
        echo "File Opened";

        $fileName = $_FILES['photo']['name'];
        $fileSize = $_FILES['photo']['size'];

        $destination = __DIR__. "/images_php/" . $fileName;
        move_uploaded_file($_FILES['photo']['tmp_name'],$destination);
        $studData = [ "ID" => $_POST['studID'], "Name" => $_POST['studName'], "gender" => $_POST['gender'],"Username" => $_POST['userName'],"Password" => $_POST['password'], "Course" => $_POST['course'], "MobileNo" => $_POST['mobile'], "Photo" => $_FILES['photo']['name']];

        fputcsv($file,$studData);
        print_r($studData);

        fclose($file);
    }
?>