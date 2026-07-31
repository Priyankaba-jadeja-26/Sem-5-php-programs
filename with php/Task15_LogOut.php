<?php
    session_start();
    session_destroy();

    header("location: Task15_StudentLogIn.php");
    exit();
?>