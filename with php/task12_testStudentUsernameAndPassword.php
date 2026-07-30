<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test if the student exists or not</title>
</head>
<body>
    <center>
        <form action="" method="POST">
            
            <label for="userName">Username</label>
            <input type="text" name="userName" id="userName" required>
            <br><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <br><br>

            <input type="submit" value="Log in" name="login">
        </form>
    </center>
</body>
</html>
<?php
    if(isset($_POST['login'])){
        $username = $_POST['userName'];
        $password = $_POST['password'];
        $count = 0;

        $file = fopen("Task12_StudentData.csv","r");
        while(!feof($file)){
            $data = fgetcsv($file);
            //print_r($data);
            //echo "$data[3]";
            if($data[3] == $username and $data[4] == $password){
                $count = 1;
                $_SESSION['userName'] = $username;
                echo "<br>";
                echo "Student login successfull...";
                echo "<br>";
               
                break;
            }
        }

        if($count == 0){
            echo "<br>";
            echo "Student not found.!! Invalid Username or Password.";
            echo "<br>";
        }
    }
?>