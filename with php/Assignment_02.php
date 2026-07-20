<?php

$s1 = 85;
$s2 = 90;
$s3 = 78;
$s4 = 88;
$s5 = 80;

$total = $s1 + $s2 + $s3 + $s4 + $s5;
$percentage = $total / 5;

echo "Total Marks = " . $total . "<br>";
echo "Percentage = " . $percentage . "%<br>";

if ($percentage >= 90)
{
    echo "Grade = A+";
}
else if ($percentage >= 75)
{
    echo "Grade = A";
}
else if ($percentage >= 60)
{
    echo "Grade = B";
}
else if ($percentage >= 50)
{
    echo "Grade = C";
}
else
{
    echo "Grade = Fail";
}

?>