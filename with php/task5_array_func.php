<?php
    function basicFun(){
        echo "Trying the basic functions in php";
    }

    basicFun();

    echo "</br></br>";
    echo "-------------Basic Array-------------";

    function arrayDeclaring(){
        $arrayColors = array('blue', 'red', 'white', 'black', 'pink', 'orange', 'grey', 'sky');
        echo "</br></br>";
        // print_r($arrayColors);
    }
    arrayDeclaring();

    echo "</br></br>";
    echo "-------------Array functions are starting from here-------------";
    echo "</br></br>";

    function arrayCount(){
        $arrayColor = array('blue', 'red', 'white', 'black', 'pink', 'orange', 'grey', 'sky');
        $count = count($arrayColor);
        echo "Function 01. Count: .$count";
    }

    function arrayPush(){
        $arrayColor = array('blue', 'red', 'white', 'black', 'pink', 'orange', 'grey', 'sky');
        array_push($arrayColor,"new color");
        echo "Function 02. array_push:  ";
        print_r($arrayColor);
    }

    function arrayPop(){
        $arrayColor = array('blue', 'red', 'white', 'black', 'pink', 'orange', 'grey', 'sky');
        array_pop($arrayColor);
        echo "Function 03. array_pop:  ";
        print_r($arrayColor);
    }

    function arrayShift(){
        $arrayColor = array('blue', 'red', 'white', 'black', 'pink', 'orange', 'grey', 'sky');
        array_shift($arrayColor);
        echo "Function 04. array_shift:  ";
        print_r($arrayColor);
    }

    function arrayUnshift(){
        $arrayColor = array('blue', 'red', 'white', 'black', 'pink', 'orange', 'grey', 'sky');
        array_unshift($arrayColor,"New color 1","New color 2");
        echo "Function 05. array_unshift:  ";
        print_r($arrayColor);
    }

    function arraysort(){
        $arrayColor = array('blue', 'red', 'white', 'black', 'pink', 'orange', 'grey', 'sky');
        sort($arrayColor);
        echo "Function 06. array_sort:  ";
        print_r($arrayColor);
    }

    function arrayRsort(){
        $arrayColor = array('blue', 'red', 'white', 'black', 'pink', 'orange', 'grey', 'sky');
        rsort($arrayColor);
        echo "Function 07. array_reverse_sort:  ";
        print_r($arrayColor);
    }

    function arrayAssort(){
        $arrayColor = array("1"=>'blue', "2"=> 'red', "3"=>'white', '4'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        asort($arrayColor);
        echo "Function 08. array asort: ";
        foreach($arrayColor as $x => $x_value){
            echo "Key = ".$x.", Value = ".$x_value;
            echo "</br>";
        }
    }

    function arrayArsort(){
        $arrayColor = array("1"=>'blue', "2"=> 'red', "3"=>'white', '4'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        arsort($arrayColor);
        echo "Function 09. array arsort: ";
        foreach($arrayColor as $x => $x_value){
            echo "Key = ".$x.", Value = ".$x_value;
            echo "</br>";
        }
    }

    function keySort(){
        $arrayColor = array("1"=>10, "2"=> 'red', "43"=>'white', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        ksort($arrayColor);
        echo "Function 10. array key sort: ";
        print_r($arrayColor);
    }

    function arrayMerge(){
        $arrayColor1 = array("1"=>10, "2"=> 'red', "43"=>'white', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        $arrayColor2 = array("1"=>'blue', "2"=> 'red', "3"=>'white', '4'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        echo "Function 11. array merge: ";
        print_r(array_merge($arrayColor1,$arrayColor2));
    }

    function arrayReverse(){
        $arrayColor1 = array("1"=>10, "2"=> 'red', "43"=>'white', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        //$arrayColor2 = array("1"=>'blue', "2"=> 'red', "3"=>'white', '4'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        array_reverse($arrayColor1);
        echo "Function 12. array reverse: ";
        print_r(array_reverse($arrayColor1));
    }

    function arrayInArray(){
        $arrayColor1 = array("1"=>10, "2"=> 'red', "43"=>'white', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        echo "Function 13. in_array : ";    
        if (in_array("blue", $arrayColor1)){
            echo "Found the color";
        } else {
            echo "Color not found";
        }
    }

    function arraySearch(){
        $arrayColor1 = array("1"=>10, "2"=> 'red', "43"=>'white', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        echo "Function 14. array_search: "; 
        echo array_search('pink',$arrayColor1); 
    }

    function arraylist(){
        $arrayColors = array('blue', 'red', 'white', 'black', 'pink', 'orange', 'grey', 'sky');
        list($a,$b,$c,$d,$e,$f,$g,$i) = $arrayColors;

        echo "Function 15. array list: ";
        echo "don't know what's going but something is happening $a, $b, $c, $d, $e, $f ";
    }

    function arraymergeRecursive(){
        $arrayColor1 = array("1"=>10, "2"=> 'red', "43"=>'white', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        $arrayColor2 = array("1"=>'blue', "2"=> 'red', "3"=>'white', '4'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        echo "Function 16. array_merge_recursive: ";
        print_r(array_merge_recursive($arrayColor1,$arrayColor2));
    }

    function arraySlice(){
        $arrayColor1 = array("1"=>10, "2"=> 'red', "43"=>'white', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        echo "Function 17. array_slice: ";
        print_r(array_slice($arrayColor1, 2, 8));
    }

    function arrayUnique(){
        $arrayColor1 = array("1"=>10, "2"=> 'red', "43"=>'white', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        echo "Function 18. array_unique: ";
        print_r(array_unique($arrayColor1));      
    }

    function arrayKeys(){
        $arrayColor1 = array("1"=>10, "2"=> 'red', "43"=>'43', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        echo "Function 19. array_keys: ";
        print_r(array_keys($arrayColor1));
        
        echo "with perameters";
        print_r(array_keys($arrayColor1, 43));
    }

    function arrayKeyExists(){
        $arrayColor1 = array("1"=>10, "2"=> 'red', "43"=>'43', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        echo "Function 20. array_key_exists: ";
        if (array_key_exists(6,$arrayColor1)) {
            echo "Found the key";
        } else {
            echo "key not found";
        }
    }

    function arrayMultiSort(){
        $arrayColors = array('blue', 'red', 'white', 'black', 'pink', 'orange', 'grey', 'sky');
        $arrayColor1 = array("1"=>10, "2"=> 'red', "43"=>'43', '40'=>'black', '5'=>'pink', '6'=>'orange', '7'=>'grey', '8'=>'sky');
        echo "Function 21. array_multisort: ";
        array_multisort($arrayColors,$arrayColor1);
        print_r($arrayColors);
        print_r($arrayColor1);
    }

    arrayCount();
    echo "</br></br>";
    arrayPush();
    echo "</br></br>";
    arrayPop();
    echo "</br></br>";
    arrayShift();
    echo "</br></br>";
    arrayUnshift();
    echo "</br></br>";
    arraysort();
    echo "</br></br>";
    arrayRsort();
    echo "</br></br>";
    arrayAssort();
    echo "</br></br>";
    arrayArsort();
    echo "</br></br>";
    keySort();
    echo "</br></br>";
    arrayMerge();
    echo "</br></br>";
    arrayReverse();
    echo "</br></br>";
    arrayInArray();
    echo "</br></br>";
    arraySearch();
    echo "</br></br>";
    arraylist();
    echo "</br></br>";
    arraymergeRecursive();
    echo "</br></br>";
    arraySlice();
    echo "</br></br>";
    arrayUnique();
    echo "</br></br>";
    arrayKeys();
    echo "</br></br>";
    arrayKeyExists();
    echo "</br></br>";
    arrayMultiSort()

?>