<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $students = array(
        '101' => 'Bincy', 
        '104' => 'Irene', 
        '106' => 'Fiza', 
        '102' => 'Abin',
    );

    echo "<b>Original Array :</b><br>";
    foreach ($students as $rollno => $name) {
        echo "No: $rollno, Name: $name <br/>";
    }
    echo "<br/>";

    echo "# sort and rsort replaces the keys with the numeric keys, 0, 1, 2  <br/><br/>";
    // sort() - sorts in ascending order
    $std1 = $students;
    sort($std1);
    echo "<b>Sorting using sort():</b><br>";
    foreach ($std1 as $rollno => $name) {
        echo "Roll No: $rollno, Name: $name <br/>";
    }
    echo "<br/>";

    // rsort() - sorts in descending order
    $std2 = $students;
    rsort($std2);
    echo "<b>Sorting using rsort():</b><br>";
    foreach ($std2 as $rollno => $name) {
        echo "Roll No: $rollno, Name: $name <br/>";
    }
    echo "<br/>";

    // asort() - sort based on values
    $std3 = $students;
    asort($std3);
    echo "<b>Sorting using asort():</b><br>";
    foreach ($std3 as $rollno => $name) {
        echo "Roll No: $rollno, Name: $name <br/>";
    }
    echo "<br/>";

    // ksort() - sort based on keys
    $std4 = $students;
    ksort($std4);
    echo "<b>Sorting using ksort():</b><br>";
    foreach ($std4 as $rollno => $name) {
        echo "Roll No: $rollno, Name: $name <br/>";
    }
    echo "<br/>";
?>
</body>
</html>