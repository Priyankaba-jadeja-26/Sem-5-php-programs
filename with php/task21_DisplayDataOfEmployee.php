<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data Of Employee Data</title>
</head>
<body>
    <table>
        <thead>Emplyee Data</thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Department</th>
        </tr>

        <?php
            $connection = new mysqli("localhost","root","","Employee");

            if($connection->connect_error){
                die("Error in connecting to the database.". $connection->connect_error);
            }

            $data = "SELECT * FROM EmployeeData;";
            $result = mysqli_query($connection,$data);
            $row = mysqli_fetch_row($result);

            if($result){
                while($row){

                    echo "<tr>" . "<td>" . "$row[0]" . "</td>" . "<td>" . "$row[1]" . "</td>" . "<td>" . "$row[2]" . "</td>". "</tr>";
                    $row = mysqli_fetch_row($result);
                }
            }
            

            echo "Everything runned successfully.";
        ?>
                
    </table>
</body>
</html>