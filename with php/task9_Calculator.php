<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator using GET & POST method</title>
</head>
<body>
    <fieldset>
    
    <form action="" method="GET" >
        <legend>
        <label for="num1">Number 1</label>    
        <input type="number" name="num1" id="num1">

        </br></br>
        <label for="num2">Number 2</label>    
        <input type="number" name="num2" id="num2">
        

        </br></br>
        <input type="submit" value="Sum" name="sum">
        <input type="submit" value="Sub" name="sub">
        <input type="submit" value="divide" name="divide">
        <input type="submit" value="multiply" name="multiply">
        </br>
        </legend>
        <?php 
            if (isset($_GET['sum'])){
                $add = $_GET['num1'] + $_GET['num2'];
                echo "<?br>";
                echo "Sum of the numbers is: " . $add;
            }elseif (isset($_GET['sub'])){
                $sub = $_GET['num1'] - $_GET['num2'];
                echo "<?br>";
                echo "Subtraction of the numbers is: " . $sub;
            }elseif (isset($_GET['divide'])){
                $divide = $_GET['num1'] / $_GET['num2'];
                echo "<?br>";
                echo "Devision of the numbers is: " . $divide;
            }elseif (isset($_GET['multiply'])){
                $multiply = $_GET['num1'] * $_GET['num2'];
                echo "<?br>";
                echo "Multiplication of the numbers is: " . $multiply;
            } else {
                echo "Enter the value.";
            }
        ?>
        
    
    </fieldset>
    </form>
</body>
</html>