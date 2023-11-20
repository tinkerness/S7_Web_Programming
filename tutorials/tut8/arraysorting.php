<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Student Names</title>
</head>
<body>
    <h1>Sorting Student Names</h1>
    <?php
    // associative array
    $students = array(
        '102' => 'Bincy', 
        '103' => 'Cindy', 
        '104' => 'Hafsa',
        '105' => 'Elena', 
        '106' => 'Fiza', 
        '107' => 'Gloria', 
        '101' => 'Abin', 
        '108' => 'Delna',  
        '109' => 'Irene', 
        '110' => 'Jo'
    );
    echo "<b>Original Array :</b><br>";
    foreach ($students as $rollno => $name) {
        echo "Roll No: $rollno, Name: $name <br/>";
    }
    echo "<br/>";

    // asort()
    asort($students);
    echo "<b>After Sorting using asort():</b><br>";
    foreach ($students as $rollno => $name) {
        echo "Roll No: $rollno, Name: $name <br/>";
    }
    echo "<br/>";

    // rsort() - reverse sort based on names
    rsort($students);
    echo "<b>After Sorting using rsort():</b><br>";
    foreach ($students as $rollno => $name) {
        echo "Roll No: $rollno, Name: $name <br/>";
    }
    echo "<br/>";

    // ksort() - sort based on keys
    ksort($students);
    echo "<b>After Sorting using ksort():</b><br>";
    foreach ($students as $rollno => $name) {
        echo "Roll No: $rollno, Name: $name <br/>";
    }
    echo "<br/>";
    ?>
</body>
</html>