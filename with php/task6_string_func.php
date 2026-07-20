<?php

    // Array declaration

    function getArray(){
        return ['red', 'blue', 'white', 'black'];
    }

    echo "--------------------String Functions--------------------";
    echo "</br></br>";
    
    function chrFunction(){
        echo "Function 01. chr: ";
        echo "  Character as per your numeric ASCII value is: ".chr(98);    
    }

    function ordFunction(){
        echo "Function 02. ord: ";
        echo "ASCII value as per your character: ".ord("P");
    }

    function strtolowerFunction(){
        echo "Function 03. strtolower: ";
        echo "Let's convert the Upper case string --  "." Hey There!! I am Just trying to Convert my this String into all the Lower one"."</br>"."The lower case version: ".strtolower("Hey There!! I am Just trying to Convert my this String into all the Lower one");
    }

    function strtoupperFunction(){
        echo "Function 04. strtoupper: ";
        echo "Let's convert this string --  "." Hey There!! I am Just trying to Convert my this String into all the upper-case one"."</br>"."The upper case version: ".strtoupper("Hey There!! I am Just trying to Convert my this String into all the upper one");
    }

    function strlength(){
        echo "Function 05. strlen: ";
        echo "Let's count the length of this string : Hey! just counting the length of this.".strlen("Hey! just counting the length of this.");
    }

    function StringTrim(){
        echo "Function 06. trim: ";
        echo "Trim character: -i- from the string: ".trim("This is the string i want to trim ", "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    }

    function StringLtrim(){
        echo "Function 07. ltrim: ";
        echo "Trim character: -ABCDEFGHIJKLMNOPQRSTUVWXYZ- from the string: ".ltrim("This is the string i want to trim ", "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
    }

    function StringRtrim(){
        echo "Function 08. rtrim: ";
        echo "Trim character: -abcdefghijklmnopqrstuvwxyz- from the string: ".rtrim("This is the string i want to trim.", ".abcdefghijklmnopqrstuvwxyz");
    }

    function substring(){
        echo "Function 09. substr: ";
        $str = "Cutting this string into pieces.";
        echo "String is: ".$str."And after sub stringing func: ".substr($str,10);
        echo "</br>"."Zero: ".substr($str,0,2); 
        echo "</br>"."Positive: ".substr($str,5);
        echo "</br>"."Negative 1: ".substr($str,-1,10);
        echo "</br>"."Negative 2: ".substr($str,-2);
        echo "</br>"."Negative 10: ".substr($str,-10,-5 );
    }

    function strcompare(){
        echo "Function 10. strcmp: ";
        echo "</br>"."Comparing -Hello- with -Hello-".strcmp("Hello","Hello");
        echo "</br>"."Comparing -Hello- with -hello-".strcmp("Hello","hello");
        echo "</br>"."Comparing -Hello- with -HELLO-".strcmp("Hello","HELLO");
        echo "</br>"."Comparing -hELLO- with -hEllo-".strcmp("hELLO","hEllo");
    }

    // calling the functions hereeeeeeeeeeeeeeeeee.
    chrFunction();
    echo "</br></br>";

    ordFunction();
    echo "</br></br>";

    strtolowerFunction();
    echo "</br></br>";

    strtoupperFunction();
    echo "</br></br>";

    strlength();
    echo "</br></br>";

    StringTrim();
    echo "</br></br>";

    StringLtrim();
    echo "</br></br>";

    StringRtrim();
    echo "</br></br>";

    substring();
    echo "</br></br>";

    strcompare();
    echo "</br></br>";
    echo "</br></br>";
    echo "</br></br>";
    echo "</br></br>";
?>