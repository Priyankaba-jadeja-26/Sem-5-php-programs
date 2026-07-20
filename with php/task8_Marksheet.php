<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marksheet</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #d298a2;
        }
    </style>
</head>
<body>

<table>
    <tr>
        <th>Roll No.</th>
        <th>Name</th>
        <th>Subject 1</th>
        <th>Subject 2</th>
        <th>Subject 3</th>
        <th>Subject 4</th>
        <th>Subject 5</th>
        <th>Average</th>
        <th>Grade</th>
    </tr>

<?php

$filen = "sampleData.txt";

if (file_exists($filen)) {

    $lines = file($filen);

    foreach ($lines as $line) {

        $data = explode(",", trim($line));

        $roll = $data[0] ?? "";
        $name = $data[1] ?? "";
        $marks = array_slice($data, 2);
        $s1 = $data[2] ?? "-";
        $s2 = $data[3] ?? "-";
        $s3 = $data[4] ?? "-";
        $s4 = $data[5] ?? "-";
        $s5 = $data[6] ?? "-";

        $total = 0;
        $count = 0;

        if (is_numeric($s1)) {
            $total += (int)$s1;
            $count++;
        }

        if (is_numeric($s2)) {
            $total += (int)$s2;
            $count++;
        }

        if (is_numeric($s3)) {
            $total += (int)$s3;
            $count++;
        }

        if (is_numeric($s4)) {
            $total += (int)$s4;
            $count++;
        }

        if (is_numeric($s5)) {
            $total += (int)$s5;
            $count++;
        }

        $avg = ($count > 0) ? ($total / $count) : 0;

        if ($avg >= 90)
            $grade = "A+";
        elseif ($avg >= 80)
            $grade = "A";
        elseif ($avg >= 70)
            $grade = "B";
        elseif ($avg >= 60)
            $grade = "C";
        elseif ($avg >= 50)
            $grade = "D";
        else
            $grade = "F";

        echo "<tr>";
        echo "<td>$roll</td>";
        echo "<td>$name</td>";
        echo "<td>" . ($s1 === "" ? "-" : $s1) . "</td>";
        echo "<td>" . ($s2 === "" ? "-" : $s2) . "</td>";
        echo "<td>" . ($s3 === "" ? "-" : $s3) . "</td>";
        echo "<td>" . ($s4 === "" ? "-" : $s4) . "</td>";
        echo "<td>" . ($s5 === "" ? "-" : $s5) . "</td>";
        echo "<td>" . number_format($avg, 2) . "</td>";
        echo "<td>$grade</td>";
        echo "</tr>";
    }

} else {
    echo "<tr><td colspan='9'>File not found.</td></tr>";
}

?>

</table>

</body>
</html>