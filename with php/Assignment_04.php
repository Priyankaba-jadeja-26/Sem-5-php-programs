<html>
<head>
    <title>Student Information</title>
</head>

<body><center>

<h1>Student Details</h1>

<table border="1" cellpadding="10">

<tr>
    <th>Roll Number</th>
    <th>Name</th>
    <th>Course</th>
    <th>Semester</th>
</tr>

<?php

$students = array(
    array("rollno"=>1,"name"=>"Hetvi","course"=>"MSC(CA & IT)","sem"=>5),
    array("rollno"=>2,"name"=>"sneha","course"=>"MSC(CA & IT)","sem"=>5),
    array("rollno"=>3,"name"=>"priyanka","course"=>"MSC(CA & IT)","sem"=>5),
    array("rollno"=>5,"name"=>"sachet","course"=>"MSC(CA & IT)","sem"=>5),
    array("rollno"=>5,"name"=>"kevin","course"=>"MSC(CA & IT)","sem"=>5),
    array("rollno"=>6,"name"=>"devangi","course"=>"MSC(CA & IT)","sem"=>5),
    array("rollno"=>7,"name"=>"vinit","course"=>"MSC(CA & IT)","sem"=>5),
    array("rollno"=>8,"name"=>"dhvani","course"=>"MSC(CA & IT)","sem"=>5),
    array("rollno"=>9,"name"=>"priyanshi","course"=>"MSC(CA & IT)","sem"=>5),
    array("rollno"=>10,"name"=>"arjun","course"=>"MSC(CA & IT)","sem"=>5)
);

foreach($students as $student)
{
    echo "<tr>";
    echo "<td>".$student["rollno"]."</td>";
    echo "<td>".$student["name"]."</td>";
    echo "<td>".$student["course"]."</td>";
    echo "<td>".$student["sem"]."</td>";
    echo "</tr>";
}

?>

</table>
</center>
</body>
</html>