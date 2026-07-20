<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data"></form>
        <fieldset>
            <legend>Student Details: </legend>
            
            <label for="studID">Student ID</label>
            <input type="number" name="studID" id="studID">
            <br>

            <label for="studName">Name</label>
            <input type="text" name="studName" id="studName">
            <br><br>
            <label for="gender">Select Your Gender :</label>
            <br>
            <label for="Male">Male</label>
            <input type="radio" name="Male" id="Male">

            <label for="Female">Female</label>
            <input type="radio" name="Female" id="Female">

            <label for="Other">Other</label>
            <input type="radio" name="Other" id="Other">
            <br><br>

            <label for="course">Select Course : </label>
            <select name="course" id="couse">
                <option value="">------Select Your Course------</option>
                <option value="MSC[CA-IT]">MSC[CA-IT]</option>
                <option value="MSC[IT]">MSC[IT]</option>
                <option value="BSCS">BSCS</option>
                <option value="PGDCA">PGDCA</option>
            </select>
            <br><br>

            <label for="mobile">Mobile number</label>
            <input type="tel" name="mobile" id="mobile">
            <br><br>

            <label for="photo">Upload your photo</label>
            <input type="file" name="photo" id="photoUpload">
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
        $fileName = $_FILES['photo']['name'];
        echo "photo set";
    }
?>