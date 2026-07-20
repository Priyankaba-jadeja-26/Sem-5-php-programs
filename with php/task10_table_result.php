<?php
    $num = $_POST['number'];
    
    for($i = 1; $i < 11; $i++){
        echo $num . " x " . $i . " = " . $i*$num;
        echo "<br>";
    }
?>