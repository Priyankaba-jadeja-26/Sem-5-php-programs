<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username and Password validator</title>
</head>
<body style="background-color: darkgray;">
    <div style="margin-left: 25%; color: slategrey; background-color: antiquewhite; width: 44%;">
        
        <fieldset style="width: 550px;">
            <h2>Registration Form</h2>
            <form action="" method="POST">

                <fieldset style="width: 420px;">

                <label for="username">User Name:</label> <br>
                <input type="text" name="userName" id="userName" required>
                <br><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>

                <input type="submit" value="Login" name="submit">
                <input type="button" value="Sign Up">
            </form>

            <?php
                $file = fopen("UserLoginData.csv","a");

                fclose($file);
            ?>
        </fieldset>
    </div>
</body>
</html>